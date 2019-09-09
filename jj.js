let vh = window.innerHeight * 0.01;

document.documentElement.style.setProperty('--vh', `${vh}px`);

// Slider

var myIndex = 0;
    carousel();

function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
}


var myIndexTwo = 0;
    carouselTwo();

function carouselTwo() {
        var i;
        var x = document.getElementsByClassName("imp-txt");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndexTwo++;
        if (myIndexTwo > x.length) { myIndexTwo = 1 }
        x[myIndexTwo - 1].style.display = "block";
        setTimeout(carouselTwo, 2000); // Change image every 2 seconds
}

//FullScreen

function launchIntoFullscreen(element){
	if(element.requestFullScreen){
		element.requestFullScreen();
	} else if(element.mozRequestFullScreen){
		element.mozRequestFullScreen();
	} else if(element.webkitRequestFullScreen){
		element.webkitRequestFullScreen();
	} else if(element.msRequestFullScreen){
		element.msRequestFullScreen();
	}
}

launchIntoFullscreen(document.documentElement);
