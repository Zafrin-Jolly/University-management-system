"use strict"
			function ajax(){

			 

				const username = document.getElementById('username').value;

			 

				const xhttp = new XMLHttpRequest();

			 

				xhttp.open('POST', 'SearchController.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('username='+username);

			 

				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('result').innerHTML = this.responseText;
					}
				}
			}