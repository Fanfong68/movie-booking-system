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
       
        <div class="seat-container">
            <table>
                <tr>
                    <td colspan="30"><div id="screen">Screen</div></td>
                </tr>
                <tr class="gap">
                    <td colspan="30"></td>
                </tr>
                <?php for($j=0;$j<12;$j++) { 
                    $z = 1;?>
                <tr>
                    <?php for($i=0;$i<5;$i++) { ?>
                        <td class="row" value="<?=$j?>-<?=$z?>">
                            <div class="seat"></div>
                        </td>
                    <?php $z++; } ?>

                    <td class="walk"></td>

                    <?php for($i=0;$i<15;$i++) { ?>
                        <td class="row" value="<?=$j?>-<?=$z?>">
                            <div class="seat"></div>
                        </td>
                    <?php $z++; } ?>

                    <td class="walk"></td>

                    <?php for($i=0;$i<5;$i++) { ?>
                        <td class="row" value="<?=$j?>-<?=$z?>">
                            <div class="seat"></div>
                        </td>
                    <?php $z++; } ?>
                </tr>
                <?php } ?>
            </table>
            <script src="js/select_seat.js"></script>
        </div>
        <div class="page-container">
            <div id="proceed" class="proceed">
                <div class="text">{{ __('Confirm') }}</div>
            </div>
        </div>
    </body>
</x-app-layout>