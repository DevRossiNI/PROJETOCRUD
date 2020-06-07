<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Pago Em</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagamentos as $pagamento)
                <tr>
                    <th>{{$pagamento->descricao}}</th>
                    <th>{{$pagamento->valor}}</th>
                    <th>{{$pagamento->data_pagamento}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
