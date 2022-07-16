<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
				var v_email= $("#email").val();
				var password= $("#password").val();
			

			$.ajax({
				url:"v_login_process.php",
				type:"POST",
				data:{v_email:email, v_password:password},
				success :function(dataa){
					if(dataa=='1')
					{
						window.location="#"
					}
					else
					{
						$("#error").html(dataa);
					}
				
				}
			})
			
			})
		});

	</script>