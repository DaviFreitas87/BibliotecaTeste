<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TESTE PRATICO </title>
</head>
<body>
   
<div id="cabeçalho" style="text-align: center; color:white; background-color:red">
    <br>

    BIBLIOTECA
    
<br><br>
</div> 

<br><br>

<form action="/cadastrar-livro" method="POST">
@csrf
<label>Titulo do livro: </label>
<input type="text" name="titulo" value="{{ $biblioteca->titulo}}">
<br><br>
<label>ISBN: </label>
<input type="text" name="isbn" value="{{ $biblioteca->isbn}}">
<br><br>
<label>Nome do Autor: </label>
<input type="text" name="nome_autor" value="{{ $biblioteca->nome_autor}}">
<br><br>
<label>Ano do lançamento: </label>
<input type="text" name="ano" value="{{ $biblioteca->ano}}">
<br><br>


<button> ENVIAR LIVRO </button>


</form>




</body>
</html>