<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Estudante</title>
</head>
<body>
    <div align ="center">
        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div style="padding:10px;">
                <label>Nome</label>
                <input type="text" name="nome">
            </div>

            <div style="padding:10px;">
                <label>E-mail</label>
                <input type="email" name="email">
            </div>

            <div style="padding:10px;">
                <label>Imagem</label>
                <input type="file" name="image">
            </div>

            <div style="padding:10px;">
                <input type="submit">
            </div>
        </form>

        <br><br>

       
        <form action="{{url('view')}}">
            <input type="submit" value = "Ir para Listagem de Estudantes"> 
        </form>
    </div>
</body>
</html>