<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela dos dados</title>
</head>
<body>
    <h1>Tabela dos dados</h1>

    <form action ="{{url('buscar')}}" method="get" align ="center">
        <input type="search" name="buscar" placeholder="Realize uma busca">
        <input type="submit" value="Buscar">
    </form>

    <br><br>

    <form action ="{{url('home')}}" method="get" align ="center">
        <input type="submit" value="Cadastrar Novo Estudante">
    </form>

    <br><br>

    <table border="1px" align="center">
        <tr>
            <td>Nome do Estudante</td>
            <td>E-mail</td>
            <td>Foto</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        @foreach($dados as $dado)
        <tr>
            <td>{{$dado->nome}}</td>
            <td>{{$dado->email}}</td>
            <td>
                <img height="150" width="150" src="estudante/{{$dado->image}}">
            </td>
            <td>
                <a href="{{url('editar_view', $dado->id)}}">Editar</a>
            </td>
            <td>
                <a href="{{url('excluir', $dado->id)}}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>