<html>
    <head>
        <title>titulo do site</title>
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet">
    </head>
<body>
<h1>topo do site</h1>
<?php $this->loadViewInTemplate($viewName, $viewData); ?>
    <h2>Rodapé do meu site</h2>
</body>

</html>


