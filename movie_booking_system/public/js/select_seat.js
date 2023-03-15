allSeats = document.querySelectorAll('.seat');

for (var i = 0; i < allSeats.length; i++) {
    var seat = allSeats[i];
    seat.addEventListener('click', function () {
        var bgclr = this.style.backgroundColor;
        if(bgclr =='red')
            this.style.backgroundColor = 'white'
        else
            this.style.backgroundColor = 'red'
        debugger
    }, false);

    
}