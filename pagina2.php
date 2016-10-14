<html>
<head>
    <title>Página Teste</title>
</head>
<body>
<div style="width:300px;margin:auto;background-color: #999;padding: 300px">
    <h1>Este é um cabeçalho <?php echo rand(0,9999);  ?></h1>

    <form method="POST">
        <input type="text" placeholder="Email"/><br/><br/>
        <input type="password" placeholder="senha"/><br/><br/>

        <input type="submit" value="Entrar"/>
    </form>

</div>
</body>
</html>