<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <title>Amazon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <h3> Cadastro de Clientes</h3>
        <form action="gravar.php" method="post">
            <label>nome :</label>
            <input type="text" name="nome" class="form-control" style="width: 300px">
            <br>
            <label >e-mail :</label>
            <input type="text" name="e-mail" class="form-control" style="width: 300px">
            <br>
            <label>Estado Civil :</label>
            <select name="" id="">
                <option value="">solteiro</option>
                <option value="">solteiro</option>
                <option value="">solteiro</option>
                <option value="">solteiro</option>
                
            </select>
            <br>
            <label for="">sexo :</label>
            <select>
                <option value="0">masculino</option>
                <option value="1">feminino</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </div> 
</body>
</html>