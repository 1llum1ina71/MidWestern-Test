<html>
	<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<style>
	*{
		font-family: arial, sarif;
	}
	.banner{
		width: 100%;
		border-bottom: 1px solid black;
		text-align: center;
	}
	.heading1{
		font-size: 36px;
		color:black;
		text-transform: uppercase;
		text-decoration: underline;
		font-weight: normal;
	}
	.heading2{
		font-size: 24px;
		color: #767676;
		font-weight: normal;
		margin-bottom: 0px !important;
		margin-top: 14px;
	}
	.heading3{
		margin-bottom: 15px;
		padding-top: 25px;
		font-size: 22px;
		color:white;
		text-transform: uppercase;
	}
	.button{
		width: 80px;
		height: 30px;
		color: white;
		background-color: black;
		border: none;
	}
	.column{
		width: 31%;
		margin-bottom:30px;
		float:left;
	}
	.column p{
		color: #767676;
		font-size:11.5px;
		line-height: 16px;
		margin-top: 10px;
		margin-bottom: 30px;
	}
	#columnContainer{
		width:80%;
		margin-left:10%;
		margin-right:10%;
	}
	#mainContent{
		width:100%;
		background-color: gray;
	}
	.emptyContentContainer{
		width: 100%;
		background-color: #a6a6a6;
		height:75px;
	}
	.contentContainer{
		margin-left:5%;
		margin-right:5%;
		width:90%;
	}
	.container{
		width:100%;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.textField{
		width: 100%;
		height:28px;
	}
	.messageField{
		width:100%;
		height: 170px;
		margin-bottom: 17px;
	}
	#messageForm{
		width:34.5%;
		margin-left:32.75%;
		margin-right:32.75%;
		padding-bottom: 50px;
		min-width: 280px;
	}
	#messageForm label{
		color:white;
		font-size: 12.5px;
	}
	.error{
		font-style: italic;
		color:red;
		float:right;
	}
	#javascriptPuzzle{
		min-height: 220px;
	}
	#javascriptPuzzle p{
		font-size:12px;
		line-height: 16px;
		font-family: arial, sarif;
	}
	#javascriptPuzzle a{
		color: red;
		text-decoration: none;
	}
	footer{
		background-color:black;
		color:white;
		text-align:center !important;
	}
	footer p{
		text-decoration: italic;
		/*line-height:35px;*/
	}
	.flexContainer{
		width:100%;
		display:flex;
		flex-direction: row;
	}
	.flexContainerVertical{
		width:100%;
		display:flex;
		flex-direction: column;
	}
	@media only screen and (max-width: 600px)
		and (max-device-width: 600px)
	{
		.flexContainer{
			flex-direction: column;
		}
		.column{
			width: 100%;
		}
		#messageForm{
			margin-left:10%;
			margin-right:10%;
			width:80%;
			min-width:145px;
		}
	}
	@media only screen and (max-width: 500px){
		.heading1{
			font-size: 32px;
		}
		footer p{
			line-height: 24px;
		}
	}
	</style>
	<body>
	
		<!-- Header-->
		<div class = "banner">
			<img src = "./Pictures/mwi-logo-horizontal.png" style = "width:30%;min-width: 240px;padding-bottom:10px;">
		</div>
		<!-- Outer container for columns -->
		<div class = "contentContainer">
			<h1 class = "heading1">Heading One</h1>
			<div class = "flexContainer">
			<div class = "column" style = "margin-right:3.5%;">
				<div class = "emptyContentContainer">
				</div>
				<h2 class = "heading2">Heading 2</h2>
				<p>This is a paragraph text that is meant to flex and wrap to
				a new line based on the number of characters in this container.
				Please make sure this is looking pretty based on the amount of
				characters this is taking up.</p>
				<button class = "button">Read More</button>
			</div>
			<div class = "column" style = "margin-right:3.5%;">
				<div class = "emptyContentContainer">
				</div>
				<h2 class = "heading2">Heading 2</h2>
				<p>This is a paragraph text that is meant to flex and wrap to
				a new line based on the number of characters in this container.
				Please make sure this is looking pretty based on the amount of
				characters this is taking up.</p>
				<button class = "button">Read More</button>
			</div>
			<div class = "column">
				<div class = "emptyContentContainer">
				</div>
				<h2 class = "heading2">Heading 2</h2>
				<p>This is a paragraph text that is meant to flex and wrap to
				a new line based on the number of characters in this container.
				Please make sure this is looking pretty based on the amount of
				characters this is taking up.</p>
				<button class = "button">Read More</button>
			</div>
			</div>
		</div>
		<div class = "flexContainerVertical" id = "mainContent" style = "clear:both;">
			<center><p class = "heading3">Contact</p></center>
						
			<?php
				//|---------------|
				//|PHP validation |
				//|---------------|
				$email = "";
				$subject = "";
				$comment = "";
				$errorEmail = "";
				$errorSubject = "";
				$errorComment = "";

				if(isset($_POST['email']))
					$email = $_POST['email'];

				// Check if email is empty
				if(!empty($email))
				{
					// Checkif the characters '@' and '.' exist in email
					if(preg_match('/@/',$email,$matchOne))
					{
						if(preg_match('/\./',$email,$matchTwo))
						{
							$errorEmail = "";
						}
						else
						{
							$errorEmail = "Must use a valid email";
						}
					}
					else
					{
						$errorEmail = "Must use a valid email.";
					}
				}
				else
				{
					$errorEmail = "Must use a valid email.";
				}
				if(isset($_POST['subject']))
					$subject = $_POST['subject'];

				// check if subject is empty
				if(empty($subject))
					$errorSubject = "Subject is required.";
				if(isset($_POST['comment']))
					$comment = $_POST['comment'];

				// Check if comment is empty
				if(empty($comment))
					$errorComment = "Message is required."
				
				//|---------|
				//| End PHP |
				//|---------|
				?>
			
			
			<form id = "messageForm" method = "post">
				
				<div class = "container">
					<label>Email<span class = "error"><?php echo $errorEmail?></label>
				</div>
				<!--<input type = "email" class = "textField" name = "email" id = "email">-->
				<input type = "text" class = "textField" name = "email" id = "email">
				<div class = "container">
					<label>Subject<span class = "error"><?php echo $errorSubject?></label>
				</div>
				<input type = "text" class = "textField" name = "subject" id = "subject">
				<div class = "container">
					<label>Message<span class = "error"><?php echo $errorComment?></label>
				</div>
				<textarea class = "messageField" name = "comment" id = "comment"></textarea>
				<input type= "submit" class = "button" value = "Submit">
			</form>
			
			
		</div>
		<div id = "javascriptPuzzle" class = "contentContainer">
			<h1 class = "heading1" style = "margin-top:30px;">Heading One</h1>
			
			<p id = "directions">Remove the duplicates in 2 Javascript objects and output the list
			of distinct names in an unordered list when this <a id = "displayNamesLink" href = "#nameList">link is clicked</a>.
			If the operation has been completed already notify the user that this has
			all ready been done.</p>
			<ul id = "nameList" style = "display:none;">
			
			</ul>
			<script>
				var link = document.getElementById('displayNamesLink');
				link.onclick = function(){
					// if all ready clicked, skip
					if(document.getElementById("nameList").style.display == "none")
					{
						var object = removeDuplicates();
						displayNames(object);
						document.getElementById("nameList").style.display = "block";
					}
					else
					{
						if(document.getElementById('warningMessage') == null)
						{
							var element = document.createElement("p");
							element.textContent = "Operation has all ready been performed.";
							element.style.color = "red";
							element.id = "warningMessage";
							document.getElementById('directions').appendChild(element);
						}
					}
				}
				function removeDuplicates()
				{
					var object1 = {
						names: ['Matt Johnson','Bart Paden','Ryan Doss','Michael Spangler']
					};
					var object2 = {
						names: ['Matt Johnson','Bart Paden','Jordan Heigle', 'Tyler Viles']
					};
					
					// Add object2 names to object1 and remove duplicates
					for( var x = 0; x < object2.names.length; x++)
					{
						// designates if there is a duplicate value
						var duplicate = false;

						// cycle through object1 values
						for(var y = 0; y < object1.names.length; y++)
						{
							// check against value
							// Checks for duplicates
							if(object1.names[y] == object2.names[x])
							{
								duplicate = true;
								break;
							}
						}
						if(duplicate == false)
						{
							object1.names.push(object2.names[x]);
						}
						
						
					}
					
					return object1;

				}
				function displayNames(resultObject)
				{
					var displayString = "";
					// Cycle through object and Print Names
					for( var z = 0; z < resultObject.names.length; z++)
					{
						displayString += "<li>"+resultObject.names[z]+"</li>";
					}
					var list = document.getElementById('nameList');
						list.innerHTML = displayString;
				}
				
			</script>

		</div>
	</body>
	<footer>
		<div class = "flexContainerVertical">
			<p>Thanks for taking the Midwestern Interactive Benchmark Test.</p>
		</div>
	</footer>
</html>