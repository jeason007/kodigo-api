<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      
    <link rel="stylesheet" href=".../css/app.css">
    <script src=".../js/app.js"></script>
    <title>Meil</title>
    <style>
        *{padding: 0; margin: 0; font-family: 'Montserrat', sans-serif;}
       @import url('https://fonts.googleapis.com/css2?family=Carrois+Gothic&family=Golos+Text&family=Montserrat:wght@700;900&display=swap');

    html{background-color: #2F0743; }
    .container{width: auto; height: 1000px; background-color: white; overflow: hidden;}
    .head{width: 100%; height:80px; background-color: whitesmoke; padding: 5px 5px; position: relative; text-align: left;}
    .img{width: 80px; height: 80px;  background-image:url(./kofigoim.png); background-repeat: no-repeat; background-size: 100% 100%;  position: absolute; top:10px; left: 10px;}
    .title{position: absolute; top: 45px; left: 100px; font-family: 'Montserrat', sans-serif;
      font-size: 30px; color: black;}
    .body{width:100%; height: 450px; background-color: #b441eb;  padding: 2px 2px; display: flex; flex-wrap: wrap; justify-content: center; text-align: center; align-items: center;}
    .notif{width: 900px; height: 400px;  background-color: rgba(0,0,0,0.6); border-radius: 10px; box-shadow: 2px 2px 3px black, -2px -2px 3px black; padding: 5px 5px;}
    .he{width: 100%; height: auto; background-color: none; color: white; text-align: left; padding: 5px 5px;}
    .noti{color:whitesmoke; font-size: 15px;  width:200px; height: 30px; padding: 10px 10px; border-radius: 10px; box-shadow: 2px 2px 3px greenyellow, -2px -2px 3px greenyellow;}
    #cam{color:greenyellow;}
    .material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
    </style>
</head>
<body>
    
    <div class="container">
    <div class="head">
    <h4 class="title">Kodigo Empleabilidad </h4>
    <div class="img"></div>
    </div>
    <div class="body">
        <div class="notif">
        <div class="he">
            <h4 class="noti"> <span class="material-symbols-outlined" id="cam">
notifications_active
</span>    Notificacion De Cobros<i class="fa fa-address-book"></i></h4>
        </div>
        </div>

    </div>
    
  

   </div>
        <tbody>
        {{-- {{item.NombreEstudiante}} --}}
            @foreach($estudiantes as $item)
                <tr>
                    <td style="margin-right: 10%">{{$item->NombreEstudiante}}</td>
                    <td style="margin-right: 10%">{{$item->Empresa}}</td>
                    <td style="margin-right: 10%">{{$item->BootCamps}}</td>
                    <td style="margin-right: 10%">{{$item->FechaInicioTrainer}}</td>
                    <td style="margin-right: 10%">{{$item->FechaTeoricaContratacion}}</td>
                    <td style="margin-right: 10%">${{$item->SalarioFT*.20}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($estudiantes as $item)
        <p>Nombre estudiante: {{$item->NombreEstudiante}}</p>
        <p>Bootcamp: {{$item->BootCamps}}</p>
        <p>Empresa: {{$item->Empresa}}</p>
        <p>Cobro: {{$item->MontoCobrar}}</p>
        <br>
    @endforeach --}}
</body>
</html>