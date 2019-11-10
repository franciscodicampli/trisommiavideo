<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        }

        .contenido{
        font-size: 20px;
        }

        table{
            width: 100%;
            border-bottom: 1px solid #999;
        }

        thead{
            background: #eee;
            border-bottom: 1px solid #999;
        }

        th{
            font-size: 0.9em;
            padding: 0.2em;
        }

        td{
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.8em;
        }



    </style>
</head>
<body>
        <h1>LISTA DE CENSADOS</h1>
        <hr>
        <div class="contenido">
            <table>
                <thead>
                    <tr>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Fecha Nac.</th>
                        <th>Localidad</th>
                        <th>Legajo</th>
                        <th>Tutor</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($registereds as $registered)
                        <tr>
                            <td>{{ $registered->apellido }}</td>
                            <td>{{ $registered->nombre }}</td>
                            <td>{{ $registered->dni }}</td>
                            <td>{{ $registered->fechanacimiento }}</td>
                            <td>{{ $registered->localidad->localidad }}</td>
                            <td>{{ $registered->legajo }}</td>
                            <td>
                            @forelse ($registered->tutors as $tutor)
                            <span>{{ $tutor->apellido . ', ' . $tutor->nombre }}</span> <br>
                            @empty
                            <span class="badge bg-warning"><i class="icon fas fa-exclamation-triangle"></i> Sin asignar</span>
                            @endforelse
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</body>
</html>
