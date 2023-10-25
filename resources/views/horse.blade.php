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
                    <a class="nav-link active" href="{{ route('horse') }}">Horses</a>
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
                        <img src="https://img.freepik.com/premium-photo/white-horse-with-long-mane-is-running_922063-46.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_horse">Cavallo Albino</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://www.animalidifamiglia.it/wp-content/uploads/2018/09/cavallo-frisone-1.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title titol_horse">Cavallo Frisone</h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card_cat" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/id/1070549478/sv/foto/r%C3%B6d-h%C3%A4st-isolerad.jpg?s=612x612&w=0&k=20&c=R0i9vmaQwF34Zp_VhaTonlgwrbsy7x-GmTHn82g3tZg=" class="card-img-top img_certosino" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cavallo Sauro</h5>
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