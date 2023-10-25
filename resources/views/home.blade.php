<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                    <a class="nav-link" href="{{ route('bears') }}">Bears</a>
                </li>
            </ul>
        </div>

    </header>
    <main>
        <div class="img_home">
        </div>
    </main>

</body>

</html>

<style>
    .img_home {
        width: 100%;
        height: 870px;
        background-image: url("https://st2.depositphotos.com/2632879/11390/i/950/depositphotos_113904704-stock-photo-many-animals-collage.jpg");
        background-size: cover;
    }
</style>