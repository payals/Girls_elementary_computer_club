<html>
<head>
<title>Payal and Kelly Anne's Great Quote Machine</title>
<style>
	body {font-family: Arial, sans-serif;font-size:16px;background: url("i/talkbubblesbg.gif") repeat center top;padding-top: 1em;}
	h1 {font-size:3em;color:#ffffff; text-align:center;}
	form {text-align: center;} 
	input{ height:45px;font-size: 1.75em;}
	.srch {background: #18a096 url("i/payalnkelly.png") no-repeat center top;width:700px;height:auto;padding-top:11em; text-align:right;}
        input[type="text"] {margin-right:135px}
        input[type="submit"] {margin-right:135px}
	.adda {background: url("i/addbubble2.png") no-repeat center top; width:245px;height:175px;margin-top:1em;padding-top:1em;padding-left:8px;font-size:1.8em;color:#e3d7bd;}
	.adda a{text-decoration: none;font-weight: 600;color:#ffffff;line-height:.85em;}
	.footer {background-color: rgba(255, 255, 255, .85); width:600px;height:50px;padding-top:2em;}
</style>
</head>
<body>
<form action='thanks.php' method='GET'>
<center>
<div class="srch">
<h1>Add a Quote</h1>
<label>Enter Quote: </label><input type='text'  name='quote'></br></br>
<label>Who Said It: </label><input type='text'  name='quotee'></br></br>
<label>Source (if there is one): </label><input type='text' name='source'></br></br>
<label>Quote Keywords: </label><input type='text'  name='keywords'></br></br></br>
<input type='submit' name='submit' value='Submit Quote' style='text-align:center;'></br></br></br>
</div >
<div>
<div class="adda"><a href='index.php'>Back<br />to<br />Search</a></div>
</div>
</center>
</form>
</body>
</html>
