<!DOCTYPE html>
<?php 
if (isset($_COOKIE["user"])) {
		header("Location: index.php");
			die();
}
?>
<html>
<head>
	<title>Details</title>
	<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Montserrat:700);
body{
  margin:0;
  width:100%; 
  height:100vh;
  overflow:hidden;
  background:hsla(0, 5%, 5%, 1);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-image: linear-gradient(to right top, hsla(0, 5%,15%, 0.5), hsla(0, 5%, 5%,1));
}
svg{
  width:100%;
}

.style-2 input[type="text"] {
  padding: 10px;
  border: solid 5px #c9c9c9;
  -webkit-transition: border 0.3s;
  -moz-transition: border 0.3s;
  -o-transition: border 0.3s;
  transition: border 0.3s;
}
.style-2 input[type="text"]:focus, .style-2 input[type="text"].focus {
  border: solid 5px #969696;
}

#req{
	position: absolute;
	margin-top: 300px;
	margin-left: 18%;


}

input[type="text"] {
  display: block;
  margin: 0;
  width: 100%;
  font-family: sans-serif;
  font-size: 18px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
}
input[type="text"]:focus {
  outline: none;
}
ul.input-list {
  list-style: none;
  margin: 0 -10px;
  padding: 0;
}
ul.input-list li {
  display: block;
  padding: 0 120px;
  margin-top: 20px;
  margin-right: 50px;
  width: 50%;
  float: left;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 12px;
}

input[type=submit]:hover {
    background-color: #45a049;
}


@media all and (max-width: 800px) {
  ul.input-list {
    margin: 0;
  }
  ul.input-list li {
    padding: 0;
    width: 100%;
    float: none;
    margin-bottom: 10px;
  }

}


	</style>
</head>
<body style="background-image: url(images/bg.jpg);">

<div id="req">
	<form method="post" action="index.php">
		
	<ul class="input-list style-2 clearfix">
    	<li>
      		<input type="text" name="name" placeholder="NAME">
    	</li>
    	<li>
      		<input type="text" name="email" placeholder="E-MAIL" class="focus">
    	</li>
    	<li>
    		<input type="submit" name="submit" value="Submit"></input>	
    	</li>
  	</ul>

		
		
	</form>
</div>

<svg width="100%" height="100%" viewBox="30 -50 600 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
 <path id="path">
		<animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="6.8s" begin="0s" repeatCount="indefinite"/>
	</path>
	<text font-size="45" font-family="Montserrat" fill='hsla(36, 95%, 85%, 1)'>
		<textPath xlink:href="#path">Welcome To My Web Profile...
    </textPath>
	</text>
</svg>




</body>
</html>