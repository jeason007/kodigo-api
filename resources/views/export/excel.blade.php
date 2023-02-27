<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>export excel</title>
</head>
<body>
    <br>
    <table>
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Nombre de Estudiante</th>
                <th>Bootcamp</th>
                <th>Fecha Inicio Trainer</th>
                <th>Duracion de Trainer (meses)</th>
                <th>Fecha teorica de contratacion FT</th>
                <th>Fecha Facturación</th>
                <th>Duración terminos de pago</th>
                <th>Salario FT</th>
                <th>Fecha cash in</th>
                <th>Ya pasó fecha</th>
                <th>FACTURADO S/N</th>
                <th>Motivo NO facturado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $item)
                <tr>
                    <td>{{$item->Empresa}}</td>
                    <td>{{$item->NombreEstudiante}}</td>
                    <td>{{$item->BootCamps}}</td>
                    <td>{{$item->FechaInicioTrainer}}</td>
                    <td>{{$item->FechaDuracionTrainer}}</td>
                    <td>{{$item->FechaTeoricaContratacion}}</td>
                    <td>{{$item->FechaFacturacion}}</td>
                    <td>{{$item->duracionTerminosPago}}</td>
                    <td>{{$item->SalarioFT}}</td>
                    <td>{{$item->Fechacashin}}</td>
                    <td>
                        @if(date("Y-m-d") <= $item->Fechacashin && substr(date("d-m-Y"), 3) == substr(date("d-m-Y",strtotime($item->Fechacashin)),3))
                            No
                        @else
                            Si
                        @endif
                    </td>
                    <td>{{$item->Facturado}}</td>
                    <td>{{$item->noFacturado}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>