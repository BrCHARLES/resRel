$("#test").click(function myFunction(nbritems, item) {
  let res = document.getElementById('resultats');
  res.innerHTML = "Il y a "+ nbritems + " " + item;
  return res;
})
