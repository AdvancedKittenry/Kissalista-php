<!DOCTYPE html>
<html>
    <head>
        <title><?php if (isset($this->title)) echo $this->title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Kissalista</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="lista.php">Lista</a></li>
                    <li><a href="logout.php">Kirjaudu ulos</a></li>
                </ul>
            </div>
        </div>
            
        <div class="container">
            <?php if (!empty($this->error)): ?>
            <div class="alert alert-danger"><?php echo $this->error; ?></div>
            <?php endif; ?>
            <?php $this->displayContent(); ?>
        </div>
    </body>
</html>