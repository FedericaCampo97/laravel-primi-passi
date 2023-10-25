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
                    <a class="nav-link" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dogs') }}">Dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="{{ route('cats') }}">Caths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('horse') }}">Horses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bears') }}">Bears</a>
                </li>
            </ul>
        </div>
        </header>

        <main>
            <div class="mt-5 d-flex">
                <div class="ms-5">
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://img.freepik.com/premium-photo/white-persian-cat-sitting-front-ai-illustration-isolated-white-background_922332-23.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Persiano</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://www.purina.it/sites/default/files/2021-02/CAT%20HERO_0023_Siamese.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_cat">Siamese</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://www.veterinari.it/templates/yootheme/cache/44/certosino-4462cdc0.jpeg" class="card-img-top img_certosino" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_cat">Certosino</h5>
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

    .titol_cat {
        position: absolute;
        bottom: 22px;
    }

    .img_certosino {
        max-width: 450px;
        margin: 20px 40px;
    }
</style>