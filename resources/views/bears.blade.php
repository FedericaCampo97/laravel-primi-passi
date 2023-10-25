<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <body>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dogs') }}">Dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cats') }}">Caths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('horse') }}">Horses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('bears') }}">Bears</a>
                </li>
            </ul>
        </div>
        </header>

        <main>
            <div class="mt-5 d-flex">
                <div class="ms-5">
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://www.pngmart.com/files/15/Brown-Bear-PNG.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_horse">Orso Bruno</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://img.freepik.com/premium-photo/white-polar-bear-is-standing-white-background_863013-15490.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_horse">Orso Polare</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://us.123rf.com/450wm/sombra12/sombra121504/sombra12150400025/39063392-seduto-asiatic-black-bear-orso-nero-tibetano-himalayan-orso-nero-orso-della-luna-isolato-su.jpg" class="card-img-top img_certosino" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Orso Tibetano</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>
</body>

</html>
<style>
    .card_cat {
        min-width: 600px;
        min-height: 100%;
    }

    .titol_horse {
        position: absolute;
        bottom: 22px;
    }

    .img_certosino {
        max-width: 450px;
        margin: 20px 40px;
    }
</style>