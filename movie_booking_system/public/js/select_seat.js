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
            
            var receipt = document.getElementById('receipt_footer');
            receipt.innerHTML='';
            var seatstring='';
            seat.forEach(function(perseat){
               seatstring+=perseat+',';
            });
            var seatstring1 = seatstring.substr(0,seatstring.length-1);
            displaycode = document.createElement("p");
            displaycode.textContent = 'Seat number : '+seatstring1;
            displaycount = document.createElement("p");
            displaycount.textContent = 'Ticket count : '+count;
            displayprice = document.createElement("h3");
            displayprice.textContent = 'Price : RM'+(count*12);
            receipt.appendChild(displaycode);
            receipt.appendChild(displaycount);
            receipt.appendChild(displayprice);
           
            on();
        });
    }else{
        document.getElementById("proceed").style["display"] = "none";
    }
}

function toggleSeat(element){
    element.classList.toggle("selected");
    if(element.classList.contains('selected')){
        if(!(seat.includes(element.id))){
            seat.push(element.id);
        }
        
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

function loading(data){
    console.log(data['cinema']);
    document.getElementById("movieS").value = data['movie'];
    document.getElementById("dateS").value = data['date'];
    document.getElementById("timeS").value = data['time'];
    document.getElementById("cinemaS").value = data['cinema'];
    document.getElementById("seatS").value = seat;
    document.getElementById("overlay-loading").style.display = "block";
    
   
    setTimeout(function() {
       
       
    }, 2000); // 2 second
}

//for get seat can select all seat and check whether is selected or not
