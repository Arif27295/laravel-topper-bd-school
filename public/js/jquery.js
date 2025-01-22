 $(document).ready(function(){
		
	//login-pannel-start--
	$(".fa-eye").click(function(){
		$(this).css("display","none");
		$(".fa-eye-slash").css("display","block").addClass("icon-height");
		 $('#password').attr('type', 'text');
	});
	$(".fa-eye-slash").click(function(){
		$(this).css("display","none");
		$(".fa-eye").css("display","block").addClass("icon-height");
		 $('#password').attr('type', 'password');
	});
	//login-pannel-end--
	//dashboard-pannel-start--
	  $(".left-sidebar li").click(function(){
		$(this).find(".sub-nav").slideToggle(300);
		$(this).find(".fa-chevron-right").toggleClass("chevron");
	  });
	//dashboard-pannel-end--
	
	//add-student-list-start--
		$(".student-view a ").click(function(){
				$("a.active-view").removeClass("active-view");
				$(this).addClass("active-view");
			});
			$(".previous").html("Previous");
			$(".next").html("Next");
			
	//add-student-list-end--
	
	
});
