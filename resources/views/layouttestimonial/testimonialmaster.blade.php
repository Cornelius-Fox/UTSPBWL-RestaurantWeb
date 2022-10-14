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
        <h1>Testimonial</h1></h1>
        <p></p>
      </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <h2>Favorite Review</h2>

    <div class="coloumn">
        <div class="row">
            <h4>Nurul Wijaya</h4>
            <p>Hidangan Steak Tenderloin paling the best, gak menyesal udah beli di restaurant Cerita</p>
        </div>
    </div>
        <div class="row">
            <h4>Anto Manulang</h4>
            <p>Untuk Pelayanan Restauran ini, pelayan sangat ramah dan ruangannya Bersih, dan Menu ditawarkan sangatlah nikmat dan pas dikantong</p>
        </div>
    </div>
        <div class="row">
            <h4>Agus Koya</h4>
            <p>Tempat sangatlah nyaman disertai pemandangan yang indah, dan makanan sangat lezat dan pas untuk dikantong</p>
        </div>
    </div>


</footer>
</body>

</html>
