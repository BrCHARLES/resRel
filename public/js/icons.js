
		(function(f){function l(g,h){function d(a){if(!e){e=true;c.start&&c.start(a,b)}}function i(a,j){if(e){clearTimeout(k);k=setTimeout(function(){e=false;c.stop&&c.stop(a,b)},j>=0?j:c.delay)}}var c=f.extend({start:null,stop:null,delay:400},h),b=f(g),e=false,k;b.keypress(d);b.keydown(function(a){if(a.keyCode===8||a.keyCode===46)d(a)});b.keyup(i);b.blur(function(a){i(a,0)})}f.fn.typing=function(g){return this.each(function(h,d){l(d,g)})}})(jQuery);

		jQuery(document).ready( function($){

			$('#icons-filter').typing({
				stop: function (event, $elem) {
					var filterValue = $elem.val(),
						count = 0;

					if( $elem.val() ) {

						$(".icons-list li").each(function(){
							if ($(this).text().search(new RegExp(filterValue, "i")) < 0) {
								$(this).fadeOut();
							} else {
								$(this).show();
								count++
							}
						});
					} else {
						$(".icons-list li").show();
					}

					count = 0;
				},
				delay: 500
			});

		}); 