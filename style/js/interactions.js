// 3d Models Page

$(document).ready(function(){
	$("#thurible").show();
	$("#chalice").hide();
	$("#spinThurible").hide();
	$("#cube").hide();
	$("#chair").hide();

	$("#btnThurible").click(function(){
		$("#thurible").fadeIn(2000);
		$("#chalice").hide();
		$("#spinThurible").hide();
		$("#cube").hide();
		$("#chair").hide();
	});
	$("#btnChalice").click(function(){
		$("#thurible").hide();
		$("#chalice").show();
		$("#spinThurible").hide();
		$("#cube").hide();
		$("#chair").hide();
	});
	$("#btnAnimatedThurible").click(function(){
		$("#thurible").hide();
		$("#chalice").hide();
		$("#spinThurible").show();
		$("#cube").hide();
		$("#chair").hide();
	});
	$("#btnChair").click(function(){
		$("#thurible").hide();
		$("#chalice").hide();
		$("#spinThurible").hide();
		$("#cube").hide();
		$("#chair").show();
	});
	$("#btnCube").click(function(){
		$("#thurible").hide();
		$("#chalice").hide();
		$("#spinThurible").hide();
		$("#cube").show();
		$("#chair").hide();
	});
});

//End 3d Models Page

//about page
$(document).ready(function(){
	$("#chairD").click(function(){
	  $("#chairDescription").toggle();
	});
	$("#thuribleD").click(function(){
		$("#thuribleDescription").toggle();
	  });
	  $("#chaliceD").click(function(){
		$("#chaliceDescription").toggle();
	  });
	  $("#animateD").click(function(){
		$("#bodyDescription").toggle();
	  });
  });

//end about page

//Audio-About Page
document.getElementById("start_stop").onclick = function() {
    var audio = document.getElementById("audio");
    if (audio.paused == false){
		audio.pause();
	}else{
			audio.play();
	}
};
//End Audio - About Page