<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Cadastro de Notícias</h1>
    <div meto style="padding: 10pt;">
        <form method="POST" action="/api/cadastrar">
            <div class="form-group">
                <label for="formGroupExampleInput">Título</label>
                <input name="titulo" type="text" class="form-control" id="formGroupExampleInput" placeholder="Título">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Imagem</label>
                <input name="imagem" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Imagem">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Link</label>
                <input name="link" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Link">
                <button type="button" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

</html>