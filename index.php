<!doctype html>
<html class="no-js" lang="en">
    <head>
    	<title>Watch Script</title>

    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="author" content="Stephen Ginn at Crema Design Studio">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/styles.css">
    </head>

    <body>
        <div class="container">
            <header class="text-center mb-4">
                <h1 class="display-1">PHP Watch Script <span class="badge bg-warning text-dark">v37</span></h1>
                <p class="lead">Last Update: <?php print date('Y-m-d h:i:s', stat('./index.php')['mtime']) ?></p>

                <div class="text-muted">Coded by Stephen Ginn</div>
            </header>
        </div>

        <script src="/assets/load.js"></script>
    </body>
</html>
