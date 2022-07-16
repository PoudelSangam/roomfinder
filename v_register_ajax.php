
        <script src="jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">

			function printError(elemId, error) {
    				$(elemId).html(error);
					}

        $(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
                
                var name=$("#name").val();
                var phonenumber=$("#phonenumber").val();
                var address=$("#address").val();
                var v_email=$("#v_email").val();
                var password=$("#password").val();
                
               

				  var nameErr=phonenumberErr=addressErr=v_emailErr=passwordErr= true;

    if(name== "")
    {
        printError("#nameErr", "*Please enter your name");

    }
        else 
         {
            var regex = /^[a-zA-Z\s]/;                
                if(regex.test(title) == false) {
                     printError("#nameErr", "*Please enter a valid name");
                } else {
                    printError("#nameErr", "");
                    nameErr = false;
        }
    }

    
    
    

    // if(phonenumber == "") {
    //     printError("#phonenumberErr", "*Please enter your number phonenumber");
    // } else {
    //     var regex = /^[1-9]\d{9}$/;
    //     if(regex.test(no_room) === false) {
    //         printError("#phonenumberErr", "*Please enter a number valid phonenumber");
    //     } else{
    //         printError("#phonenumberErr", "");
    //         phonenumberErr = false;
    //     }
    // }

    


    // if(address=="")
    // {
    //     printError("#addressErr","*please enter address of room");
    // }
    // else{
    //         printError("#addressErr", "");
    //         addressErr = false;

    // }

     

    // if(email=="")
    // {
    //     printError("#v_emailErr","*please enter email");
    // }
    // else{
    //         printError("#v_emailErr", "");
    //         emailErr = false;

    // }

    // if(password=="")
    // {
    //     printError("#passwordErr","*please enter password");
    // }
    // else{
    //         printError("#passwordErr", "");
    //         passwordErr = false;

    // }




     


	 if(nameErr||phonenumberErr||addressErr||v_emailErr||password||== true) 
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
				url:"riewer_process.php",
				type: "POST",
				data: {name:name,phonenumber:phonenumber,address:address,v_email:v_email,password:password,
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
    
   