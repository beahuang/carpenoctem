function addToPath(s) {
	$.ajax({ url: "getPath.php",
         data: {choice: s},
         type: "POST",
         success: function(output) {
                  }
	});
}

//Display Current Story
//Takes path and find p tag with ID of (path)
function newStory() {
	// $currentStory is p tag with current path

	//css: .active: display:inline;

	$.ajax({
	    url: 'path.php',
	    type: 'GET',
	    success: function(response) {
	    	
	    	
	    	$('#' + response).addClass("active");
//	    	alert(response);
			//display image for that p tag
//			var $currentCharacter = $('#' + response).attr("class");
//			alert($currentCharacter);
//			$('.character '+ '.'+$currentCharacter).addClass("show");
	    	},
	    error:function(){
//	    	alert("Hey Guys, something's wrong, but it's gonna be ok");
	    }
	});
}

$("document").ready(function() {
	newStory();
	$("#overlay").css("height",$(window).height());
	$("#overlay").css("width",$(window).width());
	if ($(".illustration").hasClass("fade")) {
		$(".illustration").removeClass("fade");
		
	}
	
	
	//character hover stuff
	
//	$('.character').hover(
//		function () {
//			alert("hover working?");
//		},
//		function() {
//			alert("yessir");
//		}
//	);
	//page fade in and out
	$("body").css("display", "none");
	$("body").fadeIn(2000);
	$(".Poi a").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(500, redirectPage);
		});
	function redirectPage() {
	window.location = linkLocation;
	}
	
	$('.Poi').hover(
	    function() {
	        var $this = $(this); // caching $(this)
	        $('#whereTo h3').data('initialText', " ");
	        if ($this.hasClass("visited")) {
	        	$('#whereTo h3').text($('#whereTo h3').data('initialText'));	
	        }
	        else {
	        	$('#whereTo h3').text($this.data('name'));
	        }
	        
	    },
	    function() {
	        var $this = $(this); // caching $(this)
	        $('#whereTo h3').text($('#whereTo h3').data('initialText'));
//	        alert($('#whereTo h3').data('initialText'));
	    }
	);
	
	$(".illustration").click(function() {
		$(".illustration").addClass("faded");
		$(".character").addClass("faded");
		$(".illustration").fadeTo(400, 1, function() {
			//done
		});
		$(".character").fadeTo(400, 1, function() {
			//done
		});
		
	
	
	});
	

	//Fade out the image
//	$(".illustration").delay(8000).fadeOut(1000);
//	$(".illustration").delay(5000).addClass("fade");
	var $path = "cs-pk";				
	//all the phone stuff			
	$("#phone").click(function(){
		if ( $(".active").hasClass("end") ) {
			window.location.href = "end.php";
		}
		else {
			$("#overlay").css("height",$(window).height());
			$("#overlay").css("width",$(window).width());	
			$("#overlay").css("display","inline");
			$("#map").css("display", "inline");				   
			$("#phone").addClass("open");
			$("#whereTo").delay(300).fadeIn(400);	
			$("#overlay").click(function(){
				$("#whereTo").fadeOut(0);	
				$("#phone").removeClass("open");
				$("#overlay").css("display","none");
				$("#map").css("display", "none");
				});
			}				     
		});  

});