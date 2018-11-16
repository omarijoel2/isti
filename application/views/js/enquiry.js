var submitting_cycle = 0;

	function submitloader(){
		
		submitting_cycle++;
		if (submitting_cycle > 3 ){
			submitting_cycle = 1;	
		}
		
		switch ( submitting_cycle ){
		case 1 : { $("#loading").html("<p>Submitting.</p>"); break;}	
		case 2 : { $("#loading").html("<p>Submitting..</p>"); break;}	
		case 3 : { $("#loading").html("<p>Submitting...</p>"); break;}	
		}
		
		
	}



$(document).ready(function() {
	
		
		var timersubmitter = setInterval( submitloader, 700);
		
		
		
		$("#submit").click(function(){
									
			console.log("submit clicked");
			
			//validation
			var validate = true;
			
			//validate name
			if ( $("#name").val() == "" ){
				$("#name").addClass("error");
				validate = false;
			}else{
				$("#name").removeClass("error");
			}
			
			console.log($("#name").val());
			
			if ( $("#surname").val() == "" ){
				$("#surname").addClass("error");
				validate = false;
			}else{
				$("#surname").removeClass("error");
			}
			
			if ( $("#company").val() == "" ){
				$("#company").addClass("error");
				validate = false;
			}else{
				$("#company").removeClass("error");
			}
			  
			  
			var re = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
   			regpass = re.test(  $("#email").val() );
			
			//validate enquiry
			if ( $("#email").val() == "" || regpass == false ){
				$("#email").addClass("error");
				validate = false;
			}else{
				$("#email").removeClass("error");
			}
		
			console.log(validate);
			
			if ( validate == false){
			return false;
			}
			
		});
		
		
		$("#sideform").submit(function() {
		
		$("#loading").show();
	
		
		 dataString = $("#sideform").serialize();

			
			 $("#sumbithold").html("<div id='loading' style='text-align:right'></div>");
			
			 $("#load").show();
	 
	        $.ajax({
	        type: "POST",
	        url: "http://www.salesguru.co.za/wp-content/themes/sales-guru/scripts/ajax_enquire.php",
	        data: dataString,
	        dataType: "html",
	        success: function(data) {
				
				
				if ( data == "success" ){
				
					$("#form-content").html("<h2>Thank you!</h2> <p>We have received your SALESFUEL subscription and you will receive our newsletter on a regular basis.</p>");
					
				
				}else{
					$("#form-content").html("<h2>Sorry about this...</h2> <p>Something has gone wrong. Please close the windown, refresh the page and submit your details again.</p>");
					
					
				}
	 
	        },
			error:function (xhr, ajaxOptions, thrownError){
                   alert(xhr.status);
                   alert(thrownError);
                }    
	 
	        });
		
		return false;
		
	});
});

