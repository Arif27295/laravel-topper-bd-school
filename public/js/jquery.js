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
	//add-student-start--
	$("#check1").click(function(){
		var v1 =	$("#s_present_care").val();
		var v2 =	$("#s_present_village").val();
		var v3 =	$("#s_present_upzila").val();
		var v4 =	$("#s_present_district").val();
		var v5 =	$("#s_present_p_office").val();
		var v6 =	$("#s_present_p_cod").val();
		
			 $("#s_permanent_district").val(v4);
			   $("#s_permanent_care").val(v1);
			   $("#s_permanent_village").val(v2);
			
		//upzila-start-
			$.ajax({
				url: 'upzila.php',                                         
				type: "POST",
				data: {
					district_data: v4
				},
				success: function(result) {
					$('#s_permanent_upzila').html(result);
					 console.log(result);
				   $("#s_permanent_upzila").val(v3);
			    }
	        });
		//upzila-end-
		//post-office-start-
			$.ajax({
				url: 'post_office.php',                                         
				type: "POST",
				data: {
					upzila_data: v3
				},
				success: function(result) {
					$('#s_permanent_p_office').html(result);
					 console.log(result);
				   $("#s_permanent_p_office").val(v5);
				   }
			})
		//post-office-end-
		//post-office-code-start-
			$.ajax({
				url: 'post_office_code.php',                                         
				type: "POST",
				data: {
					post_office_data: v5
				},
				success: function(result) {
					$('#s_permanent_p_cod').html(result);
					 console.log(result);
				   $("#s_permanent_p_cod").val(v6);
				   }
			})
		//post-office-code-end-
				   
		  });
	//add-student-end--
	//add-student-list-start--
		$(".student-view a ").click(function(){
				$("a.active-view").removeClass("active-view");
				$(this).addClass("active-view");
			});
			$(".previous").html("Previous");
			$(".next").html("Next");
			
	//add-student-list-end--
	
	
});