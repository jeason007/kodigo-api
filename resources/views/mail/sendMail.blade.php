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

    html{background-color: #2F0743; font-family: 'Montserrat', sans-serif; height: 100%; height: 100%; }
    .container{width:100%; height: 100%; background-color: white; overflow: hidden;}
    .head{width: 100%; height:60px; padding: 5px 5px; position: relative; text-align: center; color:aliceblue; background-color: #2F0743;}
    .img{width: 200px; height: 45px;   background-repeat: no-repeat; background-size: 100% 100%;  position: absolute; top:10px; left: 10px;}
    .title{margin-top: 15px; font-size: 15px;}
    .body{width:100%; height: 100%; background-color:rgba(0,0,0,0.3);  padding: 0px 0px; text-align: center; }
    
    .material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
.no{text-align: left; background-color: none; color: red; padding: 10px 10px; font-family: 'Montserrat', sans-serif;}
.alumnos{width: 100%; height:20px; text-align: center; padding: 10px 10px; background-color:none; font-family: 'Montserrat', sans-serif; color:aqua;}
.tabla-es{background-color: none; color: white; height:300px; text-align: center; width: 100%; height: auto;}
.hea{background-color: #2F0743; color: white; border:none;}

.table{background-color: red; border-color: none;}
.name{width: 100%; height: 100%; background-color: none; text-align: left;}
.line{width: 100%; height: 2px; background-color: #2F0743;}
.line-one{padding: 8px 5px; width: 100%; background-color:none; color:#023c48; text-align: center; font-size: 15px;}
.footer{width: 100%; height: 50px; background-color: #2F0743;}
.line-two{padding: 8px 5px; width: 100%; background-color:#023c48; color:whitesmoke; text-align: center;}
.line-tree{padding: 8px 5px; width: 100%; background-color:#f97c00; color:whitesmoke; text-align: center;}
</style>
    </style>
</head>
<body>
    
    <div class="container">
    <div class="head">
    <h4 class="title">Kodigo Empleabilidad </h4>
    <div class="img" alt="logo"></div>
    </div>
    <div class="body">
        <div class="no">Notificacion De Kodigo Empleabilidad</div>
       
      <div class="alumnos">Estudiantes Pendientes De Pago </div>
      <div class="line"></div>
      <div class="tabla-es">
      @foreach($estudiantes as $item)
     <div class="name">
        <div class="line-one">Nombre Del Estudiante : {{$item->NombreEstudiante}}</div>
        <div class="line-one"> Nombre De La Empresa : {{$item->Empresa}}</div>
        <div class="line-one"> Boot Camp Cursado : {{$item->BootCamps}}</div>
        <div class="line-one"> Fecha Inicio Trainne : {{$item->FechaInicioTrainer}}</div>
        <div class="line-one"> Fecha Contratacion : {{$item->FechaTeoricaContratacion}}</div>
        <div class="line-two"> Salario Base : $ {{$item->SalarioFT}}</div>
        <div class="line-tree"> Descuento Aplicable :  $ {{$item->SalarioFT*.20}}</div>
        
     </div>
     <div class="line"></div>
     @endforeach
     
</div>
</div>

</div>
<div class="footer"></div>
</body>
</html>