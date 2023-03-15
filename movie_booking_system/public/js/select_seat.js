allSeats = document.querySelectorAll('.seat');
var count = 0;

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
        count++;
    }else{
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


