<?php
    use App\Models\Movie;
?>

<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/select_movie.css">
    </head>

    <body>
        <section id="tranding">
            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        @foreach(Movie::all() as $movie)
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset($movie->poster) }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <div class="tranding-slide-content-bottom">
                                    <p class="movie-name">
                                        {{ __($movie->name) }}
                                    </p>
                                    <h3 class="movie-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                        @endforeach
                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </section>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/select_movie.js"></script>
    </body>

  </x-app-layout> 