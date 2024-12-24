<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Registro</title>
</head>
<body>
    <h1>Atualizar Registro</h1>

    <form action="{{url('editar', $dados->id)}}" method = "post" enctype = "multipart/form-data">
        {{csrf_field()}}
        <div>
            <label>Nome do Estudante</label>
            <input type="text" name = "nome" value = "{{$dados->nome}}">
        </div>

        <div>
            <label>E-mail do Estudante</label>
            <input type="text" name = "email" value = "{{$dados->email}}">
        </div>

        <div>
            <label>Foto do Estudante</label>
            <img src="/estudante/{{$dados->image}}" height="150" width="150">
        </div>

        <div>
            <label>Mudar Foto do Estudante</label>
            <input type="file" name = "image">
        </div>

        <div>
            <input type="submit" value = "Atualizar">
        </div>
    </form>

</body>
</html>