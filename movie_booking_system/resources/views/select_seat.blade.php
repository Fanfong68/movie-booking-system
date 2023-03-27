<?php
    use App\Models\Movie;
?>

<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <td class="row" >
                            <div class="seat" onclick="toggleSeat(this)" value="<?=$j?>-<?=$z?>" id="<?=$j?>-<?=$z?>"></div>
                        </td>
                    <?php $z++; } ?>

                    <td class="walk"></td>

                    <?php for($i=0;$i<15;$i++) { ?>
                        <td class="row">
                            <div class="seat" onclick="toggleSeat(this)"  value="<?=$j?>-<?=$z?>" id="<?=$j?>-<?=$z?>"></div>
                        </td>
                    <?php $z++; } ?>

                    <td class="walk"></td>

                    <?php for($i=0;$i<5;$i++) { ?>
                        <td class="row" >
                            <div class="seat" onclick="toggleSeat(this)" value="<?=$j?>-<?=$z?>" id="<?=$j?>-<?=$z?>"></div>
                        </td>
                    <?php $z++; } ?>
                </tr>
                <?php } ?>
            </table>
            <script src="js/select_seat.js"></script>
        </div>
        <div id="overlay-receipt-container">
            <div id="receipt-container">
                <div class="close-btn">
                    <i class="fa fa-close" style="font-size:50px;" onclick="off()"></i>
                </div>
                <div class="receipt-body">
                    <h1>Receipt</h1>
                    <p>Movie Title : </p>
                    <p>Cinema : </p>
                    <p>Date : </p>
                    <p>Time : </p>
                    <p>Seat Number : </p>
                    <p>Ticket Count : </p>
                    <h2>Total Price : </h2>
                </div>
                <div id="payment" class="payment w3-animate-bottom" onclick="loading()">
                    <div class="text">{{ __('Proceed Payment') }}</div>
                </div>
            </div>
        </div>
        <div id="overlay-loading">
            <div id="loading-container">
                <p><i class="fa fa-spinner w3-text-white w3-spin" style="font-size:64px"></i></p>
            </div>
        </div>
        
           
           
        <div class="page-container">
            <div id="proceed" class="proceed w3-animate-bottom">
                <div class="text">{{ __('Confirm') }}</div>
            </div>
    
        </div>
           
        
    </body>
</x-app-layout>