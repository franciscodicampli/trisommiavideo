<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>

    {{-- <style>
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

        h4{
            font-family: Arial, Helvetica, sans-serif;
            background: #999;
            padding-left: 5px;
        }



    </style> --}}
</head>
<body>
        <h3 class="titulo">FICHA DE: {{ $registered->apellido . ', ' . $registered->nombre . ' | ' . 'Legajo: ' . $registered->legajo }}</h3>
        <hr>
        <div class="containter">
            <div class="row">
                    <h4>DATOS PERSONALES</h4>


                    <p for="">APELLIDO: {{ $registered->apellido }}</p>
                    <p>NOMBRE: {{ $registered->nombre }}</p>
                    <p>DNI: {{ $registered->dni }}</p>
                    <p>SEXO: {{ $registered->sexo }}</p>
                    <p>FECHA NACIMIENTO: {{ $registered->fechanacimiento }}</p>
            </div>

            <div class="row">
                    <h4>DATOS DE CONTACTO</h4>

                    <p>DOMICILIO: {{ $registered->direccion }}</p>
                    <p>LOCALIDAD: {{ $registered->localidad->localidad }}</p>
                    <p>TEL: {{ $registered->telefono }}</p>

            </div>
        </div>

</body>
</html>
