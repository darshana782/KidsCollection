	


			var uname_by_form=document.getElementById("username").value;
			var pass_by_form=document.getElementById("password").value;

			if(uname_by_form=="$uname"){
				if(pass_by_form=="$pass"){
					location.assign("https://www.w3schools.com");
				}else{
					alert("***Incorrect Password***");
				}
			}else{
				alert("***Incorrect Username or Password***");

			}

