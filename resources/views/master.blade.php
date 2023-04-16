<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Ecommerce Project</title>

    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- Jquery Cdn link -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    img.slider-img {
        height:400px;
        object-fit: contain;
    }

    .custom-carousel {
        height: 400px !important;
        background:#636e72;
    }

    .text-background {
        background:#00000070 !important;
    }

    .trending-img {
        height:100px;
    }

    .trending-item {
        display: flex;
        justify-content: space-between;
    }

    .details-img {
        height: 300px;
    }

    .search-products {
        display: flex !important;
        flex-wrap: wrap;
    }

    /* .item-center {
        text-align: center;
    } */
</style>
</html>