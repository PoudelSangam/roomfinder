
        <script src="jquery.js"></script>
        <script type="text/javascript">

			function printError(elemId, error) {
    				$(elemId).html(error);
					}

        $(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
                
                var title=$("#tilte").val();
                var no_room=$("#roomnumber").val();
                var price=$("#price").val();
                var location=$("#location").val();
                var facility=$("#facility").val();
                var details=$("#details").val();
                var img1=$("#img1").val();
                
               

				  var titleErr= no_roomErr= priceErr=locationErr=facilityErr=img1Err= true;

	
    
    
    if(title == "")
    {
        printError("#titleErr", "*Please enter your title");
		

    }
        else 
         {
            var regex = /^[a-zA-Z\s]/;                
                if(regex.test(title) == false) {
                     printError("#titleErr", "*Please enter a valid name");
                } else {
                    printError("#titleErr", "");
                    titleErr = false;
        }
    }

    
    
    

    if(no_room == "") {
        printError("#no_roomErr", "*Please enter your number of room");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(no_room) === false) {
            printError("#no_roomErr", "*Please enter a number of room");
        } else{
            printError("#no_roomErr", "");
            no_roomErr = false;
        }
    }

    if(price=="")
    {
     printError("#priceErr","*please enter price of room");
    }
    else{
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(price) === false) {
            printError("#priceErr", "*Please enter a valid price");
        }
        else
        {
            printError("#priceErr", "");
            priceErr = false;
        }

    }


    if(location=="")
    {
        printError("#locationErr","*please enter location of room");
    }
    else{
            printError("#locationErr", "");
            locationErr = false;

    }

     if(facility=="")
    {
        printError("#facilityErr","*please enter facility of room");
    }
    else{
            printError("#facilityErr", "");
            facilityErr = false;

    }

    if(details=="")
    {
        printError("#detailsErr","*please enter details of room");
    }
    else{
            printError("#detailsErr", "");
            detailsErr = false;

    }




     


	 if(titleErr|| no_roomErr|| priceErr||locationErr||facilityErr||img1Err == true) 
    {
       return false;
    }
    else
    {
        var hideError = function () {
                $("#Error").hide();
                $("#Success").hide();
                };
                
        	$.ajax({
				url:"rent_upload.php",
				type: "POST",
				data: {title:title, no_room:no_room, price:, location:location, facility:facility, img1:img1, img2:img2, img3:img3,
				success : function(dataa){
					if(dataa== 1)
					{
                        $(".success").css("display","block");
                        $("#Success").html("Success");
                        setTimeout(hideError,"3000");
                        $("form").trigger("reset");
                        
					}
					else
					{
                        $(".error").css("display","block");
                        $("#Error").html(dataa);
                        setTimeout(hideError,"3000");
                        $("#Error").html(dataa);		
					}
				
                }
				}
			})
    }  
			
			})
		});
	
</script>
    
   