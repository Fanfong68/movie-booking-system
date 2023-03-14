<?php
    use App\Models\Movie;
?>

<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/select_seat.css">
    </head>

    <body>
        <div class="page-container">
            <div id="proceed" class="proceed">
                <div class="text">{{ __('Confirm') }}</div>
            </div>
        </div>
    </body>
</x-app-layout>