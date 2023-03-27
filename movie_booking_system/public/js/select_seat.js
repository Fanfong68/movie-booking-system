allSeats = document.querySelectorAll('.seat');
var count = 0;
var seat = [];

function checkSelection(){
    if(count > 0){
        console.log('seat selected');

        document.getElementById("proceed").style["display"] = "block";

        const proceedButton = document.getElementById('proceed');
        proceedButton.addEventListener('click', () => {
            console.log('Button clicked!');
            on();
        });
    }else{
        document.getElementById("proceed").style["display"] = "none";
    }
}

function toggleSeat(element){
    element.classList.toggle("selected");
    if(element.classList.contains('selected')){
        
        seat.push(element.id);
        count++;
    }else{
        seat.splice(seat.indexOf(element.id), 1);
        count--;
    }

    checkSelection();
}

function on() {

    document.getElementById("overlay-receipt-container").style.display = "block";
}

function off() {
    document.getElementById("overlay-receipt-container").style.display = "none";
}

function loading(){
    document.getElementById("overlay-loading").style.display = "block";
    setTimeout(function() {
        window.location.href = 'bookings_history'
    }, 2000); // 2 second
}

//for get seat can select all seat and check whether is selected or not
