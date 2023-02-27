<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".../css/app.css">
    <script src=".../js/app.js"></script>
    <title>Meil</title>
</head>
<body>
    {{-- {{item.NombreEstudiante}} --}}
    <h1 class="text-center">Kodigo Empleabilidad Panel Estudiantes</h1>
    {{-- <h2>{{$date}}</h2> --}}
    <table class="table" >
        <thead>
            <tr>
                <th scope="col" style="margin-right: 10%">Estudiante</th>
                <th scope="col" style="margin-right: 10%">Empresa</th>
                <th scope="col" style="margin-right: 10%">Bootcamp</th>
                <th scope="col" style="margin-right: 10%">Fecha Inicio</th>
                <th scope="col" style="margin-right: 10%">Fecha Finalizacion</th>
                <th scope="col" style="margin-right: 10%">Monto a cobrar</th>
            </tr>
        </thead>
        <tbody>
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