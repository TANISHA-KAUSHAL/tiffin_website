<?php
			    if(isset($_REQUEST['ook']))
				{
					$username=$_REQUEST['uname'];
					$email=$_REQUEST['email'];
                    $phnumber=$_REQUEST['number'];
					$textarea=$_REQUEST['text'];
					$con=mysqli_connect("localhost","root","","tiffin_db");
					mysqli_query($con,"INSERT INTO contactes_user(`username`, `email`,`phnumber`, `textarea`) VALUES ('$username','$email','$phnumber','$textarea')");
					$r=mysqli_affected_rows($con);
					if($r==1)
					{
					    header("Location:contact.php");
					}
					else{
						echo("some went wrong");
					}
					mysqli_close($con);
				}
?>