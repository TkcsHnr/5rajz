<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elérhetőség</title>

    <?php include('includes/links.php') ?>
    <link rel="stylesheet" href="css/leirasok/leiras.css">
</head>

<body>
    <div class="bg">
        <header>
            <?php include 'includes/header.php' ?>
        </header>

        <script>
            document.getElementById('elerhetoseg').classList.add('active');
        </script>

        <main>
            <div>
                <h3>Email-cím:</h3>
                <p class="center"><a href="mailto:judit.hortovanyi@gmail.com"><i class="elerhetoseg fa-solid fa-envelope"></i> judit.hortovanyi@gmail.com</a></p>

                <h3>Telefonszám:</h3>
                <p class="center"><a href="tel:+36304186826"><i class="elerhetoseg fa-solid fa-phone"></i> +36 (30) 418 6826</a></p>
            </div>
        </main>

        <footer>
            <?php include 'includes/footer.php' ?>
        </footer>
    </div>
</body>

</html>