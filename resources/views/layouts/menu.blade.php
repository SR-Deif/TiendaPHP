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
          top:  -75%;
          left: -20%;

        }
        .btn1 {
          background-color: white; 
          color: white; 
          border: 2px solid #008CBA;
}

.guardar {
 font-family: inherit;
 font-size: 20px;
 background: royalblue;
 color: white;
 padding: 0.7em 1em;
 padding-left: 0.9em;
 display: flex;
 align-items: center;
 border: none;
 border-radius: 16px;
 overflow: hidden;
 transition: all 0.2s;
}

.guardar span {
 display: block;
 margin-left: 0.3em;
 transition: all 0.3s ease-in-out;
}

.guardar svg {
 display: block;
 transform-origin: center center;
 transition: transform 0.3s ease-in-out;
}

.guardar:hover .svg-wrapper {
 animation: fly-1 0.6s ease-in-out infinite alternate;
}

button:hover svg {
 transform: translateX(1.2em) rotate(45deg) scale(1.1);
}

.guardar:hover span {
 transform: translateX(5em);
}

.guardar:active {
 transform: scale(0.95);
}

@keyframes fly-1 {
 from {
  transform: translateY(0.1em);
 }

 to {
  transform: translateY(-0.1em);
 }
}
/*importar*/
/* From uiverse.io by @barisdogansutcu */
.download-button {
 position: relative;
 border-width: 0;
 color: white;
 font-size: 15px;
 font-weight: 600;
 border-radius: 4px;
 z-index: 1;
}

.download-button .docs {
 display: flex;
 align-items: center;
 justify-content: space-between;
 gap: 10px;
 min-height: 40px;
 padding: 0 10px;
 border-radius: 4px;
 z-index: 1;
 background-color: #242a35;
 border: solid 1px #e8e8e82d;
 transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover {
 box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.download {
 position: absolute;
 inset: 0;
 display: flex;
 align-items: center;
 justify-content: center;
 max-width: 90%;
 margin: 0 auto;
 z-index: -1;
 border-radius: 4px;
 transform: translateY(0%);
 background-color: #01e056;
 border: solid 1px #01e0572d;
 transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover .download {
 transform: translateY(100%)
}

.download svg polyline,.download svg line {
 animation: docs 1s infinite;
}

@keyframes docs {
 0% {
  transform: translateY(0%);
 }

 50% {
  transform: translateY(-15%);
 }

 100% {
  transform: translateY(0%);
 }
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