function changeColor(newColor){
	var elem = document.getElementById('themeWriting');
	elem.style.backgroundColor = newColor;
	elem.style.color = 'white';
}

var counter = 0;

function changeLook(){
	counter += 1;
	switch(counter){
		case 1:
			document.getElementById('header').style.backgroundColor = 'lightblue';
			document.getElementById('footer').style.backgroundColor = 'lightgreen';
			break;
		
		case 2:
			document.getElementById('header').style.backgroundColor = '#FF0000';
			document.getElementById('footer').style.backgroundColor = '#red';
			break;

		case 3:
			document.getElementById('header').style.backgroundColor = 'coral';
			document.getElementById('footer').style.backgroundColor = 'blue';
			break;

		case 4:
			counter = 0;
			document.getElementById('header').style.backgroundColor = 'lightgrey';
			document.getElementById('footer').style.backgroundColor = 'purple';
			break;
	}
}

//footer Jquery - The following jquery code has been developed so that the footer is always located at the bottom of the page contents,
// if the page is short like that of the contact page then the footer will be directly below the main content rather than leaving lots of 
//white space between the content and the bottom of the page. If you need to scroll to see the page then the footer will be located
// at the bottom of the content. To summarise this code makes sure that the footer is always directly below the content of the page 
// whether the page is short or long - remains static in the location specified.

$(window).bind("load", function() { 
       
	var footerHeight = 0,
		footerTop = 0,
		$footer = $("#footer");
		
	positionFooter();
	
	function positionFooter() {
	
			 footerHeight = $footer.height();
			 footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
	
			if ( ($(document.body).height()+footerHeight) < $(window).height()) {
				$footer.css({
					 position: "absolute"
				}).animate({
					 top: footerTop
				})
			} else {
				$footer.css({
					 position: "static"
				})
			}
			
	}

	$(window)
			.scroll(positionFooter)
			.resize(positionFooter)
			
});