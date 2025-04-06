fetch('http://localhost/mybackend/index.php')
  .then(res => res.text())
  .then(data => console.log(data));
