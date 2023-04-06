<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árak</title>

    <?php include('includes/links.php') ?>
    <link rel="stylesheet" href="css/leirasok/leiras.css">
    <link rel="stylesheet" href="css/arak.css">
</head>

<body>
    <div class="bg">
        <header>
            <?php include 'includes/header.php' ?>
        </header>

        <script>
            document.getElementById('arak').classList.add('active');
        </script>

        <main>  
            <div>
                <h2>Árak</h2>
                <p class="center">(az árak <span>ÁFA nélkül</span> szerepelnek!)</p>
            </div>
            <div>
                <p><span>Egyéni rajzfelvétel és elemző beszélgetés</span>: Másfél órás személyes rajzolás és beszélgetés, szóbeli visszajelzés a rajzokról</p>
                <p class="ar">20.000 Ft + ÁFA</p>
            </div>
            <div>
                <p><span>Páros rajzfelvétel és elemző beszélgetés</span>: Két órás páros rajzolás és beszélgetés, szóbeli visszajelzés a rajzokról</p>
                <p class="ar">30.000 Ft + ÁFA</p>
            </div>
            <div>
                <p><span>Kiscsoportos vagy családi rajzfelvétel</span>: Két órás csoportos rajzolás és beszélgetés, szóbeli visszajelzés a rajzokról</p>
                <p>3-4 fős létszám: <span class="ar">36.000 Ft + ÁFA</span></p>
                <p>5-6 fős létszám: <span class="ar">45.000 Ft + ÁFA</span></p>
            </div>
            <div>
                <p><span>Iskolai csomag minimum 20 fő létszámtól</span>: 3 tanítási óra, csoportos rajzfelvétel és közösségformáló megbeszélés:</p>
                <p class="ar">2000 Ft/fő + ÁFA</p>
            </div>
            <div>
                <p><span>Munkahelyi tréning és csapatépítés</span>: 3 órás kiscsoportos foglalkozás, rajzolás és beszélgetés, fókuszban a csapatépítéssel</p>
                <p>10-12 fős csoportokban: <span class="ar">180.000 Ft + ÁFA</span></p>
            </div>
            <div>
                <p><span>Gyakorlati képzés</span>: 5 alkalom, 5x3 óra + fejenként 1x fél óra ingyenes konzultáció </p>
                <p>2-6 fő létszámig: <span class="ar">60.000 Ft/fő + ÁFA</span></p>
                <p>8-10 fő létszámig: <span class="ar">450.000 Ft/csoport + ÁFA</span></p>
            </div>
            <div>
                <p><span>Konzultációs óradíj:</span></p>
                <p class="ar">10.000 Ft/óra + ÁFA</p>
            </div>
            <div>
                <p><span>Írásbeli elemzés:</span></p>
                <p class="ar">10.000 Ft/fő + ÁFA</p>
            </div>
        </main>

        <footer>
            <?php include 'includes/footer.php' ?>
        </footer>
    </div>
</body>

</html>