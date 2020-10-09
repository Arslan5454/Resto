@extends('layout')
@section('content')
<h1>Welcome To Chaudhry Resturant</h1>
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselBasicExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselBasicExample" data-slide-to="1"></li>
        <li data-target="#carouselBasicExample" data-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/07/24/761345/269dd27cfe5c78b54fd142ea9b4ecf10.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/07/24/761420/c0216adae91fa2889b27c73853b9ffee.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://cdn.hipwallpaper.com/i/45/93/augZK6.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                    Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                </p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carouselBasicExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselBasicExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel wrapper -->
@stop