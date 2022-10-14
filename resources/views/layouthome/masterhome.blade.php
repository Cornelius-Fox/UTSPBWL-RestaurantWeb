<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyCompany') | MyCompany</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body class="text-center">

    <div class="jumbotron" >
        <h1>Restaurant Lembang Cerita</h1>
        <p>Menghidangkan Menu Steak dan Soup</p>
      </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <h2>Menu Favorite</h2>

    <div class="coloumn">
        <div class="row">
            <img src="/img/1-27.jpg" width="350px" height="230px" />
        </div>
    </div>
        <div class="row">
            <img src="/img/Sup Iga Kemangi.jpg" width="350px" height="230px" />
        </div>
    </div>
        <div class="row">
            <img src="/img/Anggur Merah.jpg" width="350px" height="230px" />
        </div>
    </div>


</footer>
</body>

</html>

