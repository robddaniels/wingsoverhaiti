		<footer>
            <div class="footer-header">
                <div id="footer-logo">
                    <span class="footer-logo-header" title="Wings Over Haiti">Wings Over Haiti</span>
                    <span class="footer-logo-subheader" title="Helping the Children of Haiti Soar">Helping the Children of Haiti Soar</span>
                </div>
                <!--<p>PO BOX 192<br/>Sag Harbor, NY 11963<br/>917-721-3223</p>-->
            </div>
            <div class="sign-up">
                <p>Sign up to receive updates from Wings Over Haiti</p>
                <form name="sign-up" id="sign-up" method="post" action="">
                	<fieldset>
                        <input type="email" name="email" id="email" value="" placeholder="Your Email Address" />
                        <input type="submit" value="Sign Up" />
                    </fieldset>
                </form>
                <p class="address"><span style="text-transform: none;">Checks can be sent to:</span><br/>PO BOX 192<br/>Sag Harbor, NY 11963<br/>917-721-3223</p>
                <!--<ul id="">
                    <li class="facebook">
                        <a title="Facebook" href="https://www.facebook.com/wingsoverhaiti" target="_blank"></a>
                    </li>
                    <li class="twitter">
                        <a title="Twitter" href="#" target="_blank"></a>
                    </li>
                    <li class="email">
                        <a title="Email" href="mailto:info@wingsoverhaiti.net"></a>
                    </li>
                </ul>-->
            </div>
            <div class="copyright">
                <p>&#169; <span id="date"></span> Wings over Haiti is a 501(c)3 and we have no administrative salaries</p>
            </div>
        </footer>
        
        <script type="text/javascript">
            var d = new Date();
            document.getElementById("date").innerHTML = d.getFullYear();
			
			$(document).ready(function() {
				$('#sign-up').validate({
				  rules: {
					email: {
						required: true,
						email: true
					}
				  }
				});
			});
			
			if ( window.history.replaceState ) {
  				window.history.replaceState( null, null, window.location.href );
			}
		
		</script>
        
        <?php
		if(isset($_POST['email'])) {
			$email = $_REQUEST['email'] ; 
			$inquiryEmail = "abijur@me.com,jonathan.glynn@icloud.com,shalizadad@yahoo.com,info@wingsoverhaiti.net" ;
			$body  =  "Email: $email\n";			
			   // send
			if(!empty($email))
			{
			  mail( "$inquiryEmail","Wings Over Haiti Signup",
			  $body, "From: $email" );
			  echo "<script type='text/javascript'>\n";
				echo "showThankyouOverlay();\n";
			   echo "</script>";
			  //header( "Location: index.php?source=signup" );
			}
		}
		?>
        </div>
	</body>
</html>
