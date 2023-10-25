<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('dogs') }}">Dogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cats') }}">Caths</a>
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
                <div class="card card_dogs" style="width: 18rem;">
                    <img src="https://www.purina.it/sites/default/files/2021-02/BREED%20Hero_0044_dalmatian.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dalmata</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card_dogs" style="width: 18rem;">
                    <img src="https://media.istockphoto.com/id/179117242/it/foto/bernese-moutain-cane.jpg?s=612x612&w=0&k=20&c=3YtOuuMMu-E4fLqliFzyVQPBhKsti45zohJXc7KIenU=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title titol_bovaro">Bovaro del Bernese</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card_dogs" style="width: 18rem;">
                    <img src="https://t1.ea.ltmcdn.com/it/razas/9/7/5/dogo-argentino_579_0_orig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dogo Argentino</h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<style>
    .card_dogs {
        min-width: 600px;
        min-height: 100%;
    }

    .titol_bovaro {
        position: absolute;
        bottom: 22px;
    }
</style>