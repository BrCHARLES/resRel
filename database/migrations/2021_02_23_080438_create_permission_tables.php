<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('guard_name');
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });

        Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('permission_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_permissions_model_id_model_type_index');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('role_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_roles_model_id_model_type_index');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id'], 'role_has_permissions_permission_id_role_id_primary');
        });

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));

        //Ajouter les rôles et les permissions

        //Création des rôles
        $role_superadmin = Role::create(['name' => 'superadmin']);
        $role_admin = Role::create(['name' => 'admin']);
        $role_moderator = Role::create(['name' => 'moderator']);
        $role_user = Role::create(['name' => 'user']);
        $role_visitor = Role::create(['name' => 'visitor']);

        //Création des permissions
        $permission = Permission::create(['name' => 'Lire une ressource']);
        $permission = Permission::create(['name' => 'Créer une ressource']);
        $permission = Permission::create(['name' => 'Mettre à jour une ressource']);
        $permission = Permission::create(['name' => 'Supprimer une ressource']);
        
        // Attribution des permissions aux rôles
        $role_superadmin->givePermissionTo('Lire une ressource');
        $role_superadmin->givePermissionTo('Créer une ressource');
        $role_superadmin->givePermissionTo('Mettre à jour une ressource');
        $role_superadmin->givePermissionTo('Supprimer une ressource');
        
        $role_admin->givePermissionTo('Lire une ressource');
        $role_admin->givePermissionTo('Créer une ressource');
        $role_admin->givePermissionTo('Mettre à jour une ressource');
        $role_admin->givePermissionTo('Supprimer une ressource');
        
        $role_moderator->givePermissionTo('Lire une ressource');
        $role_moderator->givePermissionTo('Mettre à jour une ressource');
        $role_moderator->givePermissionTo('Supprimer une ressource');
        
        $role_user->givePermissionTo('Lire une ressource');
        $role_user->givePermissionTo('Créer une ressource');
        $role_user->givePermissionTo('Mettre à jour une ressource');
        
        
        $role_visitor->givePermissionTo('Lire une ressource');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
