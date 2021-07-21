<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .titulo {
            border: 1px;
            background-color: #c2c2c2;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }

        table th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h2 class="titulo">Lista de Tarefas</h2>

    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Data limite conclusão</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tarefas as $key => $t)
                <tr>
                    <th>{{$t->id}}</th>
                    <td>{{$t->tarefa}}</td>
                    <td>{{date('d/m/Y', strtotime($t->data_limite_conclusao))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="page-break"></div>
    <h2>Página 2</h2>

    <div class="page-break"></div>
    <h2>Página 3</h2>

    <div class="page-break"></div>
    <h2>Página 4</h2>
</body>
</html>


