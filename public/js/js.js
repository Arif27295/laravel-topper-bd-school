//data-count-js-start-
	(function(){
    document.addEventListener("keyup", function(event){
    	if(event.target.matches(".count-chars")){
    		// get input value and length
    		const value = event.target.value;
    		const valueLength = event.target.value.length;
    		// get data value
    		const maxChars = parseInt(event.target.getAttribute("data-max-chars"));
    		const remainingChars = maxChars - valueLength;
    		if(valueLength > maxChars){
    			// limit chars to maxChars
    			event.target.value = value.substr(0, maxChars);
    			return;  //end function execution
    		}
    		event.target.nextElementSibling.innerHTML = remainingChars + " characters remaining";
    	}
    })
})();
//data-count-js-end-
 //student-list-start-
 
	//search-bar-start
		const searchBar = () =>{
		
			let filter = document.getElementById('search-bar-input').value.toUpperCase();
			
			let myTable = document.getElementById('search-bar-table');
			
			let tr = myTable.getElementsByClassName('tr');
			
			for(var i=0; i<tr.length; i++){
				let td = tr[i].getElementsByClassName('td')[0];
				
				if(td){
					let textvalue = td.textContent || td.innerHTML;
					
					if(textvalue.toUpperCase() .indexOf(filter) > -1){
						tr[i].style.display = '';
						}else{
							tr[i].style.display = 'none';
							
						}
					}	
				}
			}
	//search-bar-end
 //student-list-end-

//loading-js-start-
var loader = document.getElementById("center");
		
		window.addEventListener("load",function(){
			loader.style.display = "none";
		})
//loading-js-end-
//print-js-start-
  //<![CDATA[
        jQuery(function($) { 'use strict';
            try {
                var original = document.getElementById('canvasExample');
                original.getContext('2d').fillRect(20, 20, 120, 120);
            } catch (err) {
                console.warn(err)
            }
            $("#ele2").find('.print-link').on('click', function() {
                //Print ele2 with default options
                $.print("#ele2");
            });
            $("#ele4").find('button').on('click', function() {
                //Print ele4 with custom options
                $("#ele4").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Add this at top
                    prepend : "Hello World!!!<br/>",
                    //Add this on bottom
                    append : "<span><br/>Buh Bye!</span>",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
        });
        //]]>
//print-js-end-

//add-student-js-start-

//add-student-js-end-
//add-fees-php-js-start-
	$('#p_type').on('change', function() {
			var pay_id = this.value;
		  //   console.log(district_id);
			$.ajax({
				url: 'ajax.php',                                         
				type: "POST",
				data: {
					pay_method_data: pay_id
				},
				success: function(result) {
					$('#amount').html(result);
				  //   console.log(result);
				}
			})
		});
//add-fees-php-js-end-
