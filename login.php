<?php

//Start session
session_start();	
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);

?>
<html>
<head>
<meta name="robots" content="noindex, nofollow">
<meta name="Googlebot" content="noindex, nofollow">
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Administrator Login | </title>
 <script language="javascript" type="text/javascript">
    
     function showLoading( )
   {
       document.getElementById('lyrLoading').style.display = 'inline';
   }
    </script>

</head>
<body link="#000080" vlink="#000080" alink="#000080">
<table border="0" width="100%" height="100%">
        <tr>
                <td>
                <div align="center">
                
                        <p align="center"><img border="0" src="gif/imgLogoSmall.gif"></p>



                
                        

                        <table border="0" width="250">			
                                <tr>
						
                                        <td>
										
                                        <form name="loginform" onsubmit="javascript:window.setTimeout('showLoading();', 1);" method="post" action="login_exec.php">
<td colspan="2">

		<!--Display any input validation prompts. Can be moved depending on where you want the prompts to be present.-->

		 <?php

			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {

			echo '<ul class="err">';

			foreach($_SESSION['ERRMSG_ARR'] as $msg) {

				echo '<li>',$msg,'</li>'; 

				}

			echo '</ul>';

			unset($_SESSION['ERRMSG_ARR']);

			}

		?>

	</td>


                                        <input type="hidden" name="process" value="1">
                                                <p align="center">
                                                <font face="Arial">
                                                <img border="0" src="gif/imgUser.gif"><br>
                                                <input name="username" size="25" style="text-align: center; font-family: Arial; font-size: 14; "></font></p>
                                                <p align="center">
                                                <font face="Arial">
                                                <img border="0" src="gif/imgPassword.gif"><br>
                                                <input type="password" name="password" size="25" style="text-align: center; font-family: Arial; font-size: 14; "></font></p>
                                                <p align="center"><font face="Arial">
                                                <input type="image" src="gif/btnLogIn.gif" name="B1"></font></p>
                                        </form>
										<style style="text/css">
div.slide-left {
  width:100%;
  overflow:hidden;
}
div.slide-left p {
  animation: slide-left 3s;
}

@keyframes slide-left {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
</style>
                                        <table border="0" width="100%">
                                                <tr>
                                                        
                                                        <td align="center">
                                        <p align="center"><font face="Arial,helvetica" size="1">
                                        
                                                </tr>
                                        </table>
                                        </td>
                                </tr>
                        </table>
                  </p>              
                        </div>
                </td>
        </tr>
</table>
	    <div style="display: none; z-index: 5; position: absolute; width: 500px; height: 260px; top: 50%; left: 50%; margin-top: -130px; margin-left: -250px;" id="lyrLoading">
            <div align="center">
            <table border="0" width="100%" height="100%">
                    <tr>
                            <td>
                            <div align="center">
                            <table border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" style="border: 2px solid #A6CDF9" width="200" height="130">
									 <tr>
                                            <td>
                                                    <img border="0" src="gif/imgLoading.gif" width="32" height="32" align="right">
                                            </td>
                                            <td>
                                                    <p align="left">
                                                    <font face="arial,helvetica" size="2">Validating...</font>
                                                    </p>
                                            </td>
                                    </tr>
                            </table>
                            </div>
                            </td>
                    </tr>
            </table>
            </div>
            </div>


</body>


</html>
