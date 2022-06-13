<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css') }}"/>
    
</head>
<body>
<nav class=" deep-purple darken-2" >
    <div class="nav-wrapper">
      <style>
        .materialboxed {
          width: 100px;
          position:absolute;
          top:  -10%;
          left: 85%;
        }
        .brand-logo{
          left: 2%;
        }

        .boxed{
          float:left;
          width: 25%;
          position:absolute;
          top:  -30%;
          left: -17%;

        }

        .btn{
          color: #0099CC;
          background: transparent;
          border: 2px solid #0099CC;
          border-radius: 5px;
          
          border: none;
          color: white;
          padding: 25px 30px;
          text-align: center;
          display: inline-block;
          font-size: 20px;
          margin: 10px 20px;
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
          cursor: pointer;
          text-decoration: none;
          text-transform: uppercase;

        }
        .btn1 {
          background-color: white; 
          color: white; 
          border: 2px solid #008CBA;
}
        
      </style>
      
    
      <a href="#" class="brand-logo">Tienda Sus<img class="materialboxed" src="https://acegif.com/wp-content/uploads/2020/11/am0ngsusxh-36.gif"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="btn">Sass</a></li>
        <li><a href="badges.html" class="btn">Components</a></li>
        <li><a href="collapsible.html" class="btn">JavaScript</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems,[]);
  });</script>
</body>
</html>