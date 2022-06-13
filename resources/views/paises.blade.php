<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <center>
    <h1>
        Paises de la región 
    </h1>
</center>

    <table class="table table-striped">
        <thead>
            <tr>
                <th><font size ="5", color ="violet"> País</font></th>
                <th><font size ="5", color ="red">Capital</font></th>
                <th><font size ="5", color ="pink">Moneda</font></th>
                <th><font size ="5", color ="golde">Poblacion</font></th>
                <th><font size ="5", color ="green">Ciudades</font></th>
            </tr>
            
           
        </thead>

        <tbody>
            @foreach($Paises as $pais => $infopais)
            <tr>
                <td rowspan='{{ count($infopais["Ciudades"])}}'>{{ $pais }}</td>
                <td rowspan='{{ count($infopais["Ciudades"])}}'>{{ $infopais["Capital"] }}</td>
                <td rowspan='{{ count($infopais["Ciudades"])}}'>{{ $infopais["Moneda"] }}</td>
                <td rowspan='{{ count($infopais["Ciudades"])}}'>{{ $infopais["Poblacion"] }}</td>
                @foreach($infopais["Ciudades"] as $Ciudad)
                 
                    <td class="p-3 mb-2 bg-warning text-dark">{{$Ciudad}}</td>
                </tr>
                @endforeach
            
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>

    
</body>
</html>