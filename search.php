<html>
<head>
<title>Payal and Kelly Anne's Great Quote Machine</title>
<style>
        body {font-family: Arial, sans-serif;font-size:16px;background: url("i/talkbubblesbg.gif") repeat center top;padding-top: 1em;}
        h1 {font-size:3em;color:#ffffff;}
        form {text-align: center;}
        input{ height:45px;font-size: 1.75em;}
        .results  {width:300px; padding-left:200px; text-align:left; }
        .results p {font-family: Arial, sans-serif;font-size:16px; color:#0f5981;}
        .results p a {color:#ffffff; text-decoration: none; font-size:1.5em;}
        .srch {background: #18a096 url("i/payalnkelly.png") no-repeat center top;width:700px;height:auto;padding-top:12em;padding-bottom:2em;text-align: center;}
        .adda {background: url("i/addbubble2.png") no-repeat center top; width:245px;height:175px;margin-top:1em;padding-top:1em;padding-left:8px;font-size:1.8em;color:#e3d7bd;}
        .adda a{text-decoration: none;font-weight: 600;color:#ffffff;line-height:.85em;}
        .footer {background-color: rgba(255, 255, 255, .85); width:600px;height:50px;padding-top:2em;}
</style>
</head>
<body>
<center>
<div class="srch">
<div class="results">
<?php
 
$button = $_GET ['submit'];
$search = $_GET ['search']; 
 
if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search term too short";
else{
#echo "You searched for <b>$search</b> <hr size='1'>";
mysql_connect("localhost","your_user","user_password");
mysql_select_db("database_name");
 
$search_exploded = explode (" ", $search);
 
foreach($search_exploded as $search_each)
{
$x++;
if($x==1)
$construct .="keywords LIKE '%$search_each%'";
else
$construct .="AND keywords LIKE '%$search_each%'";
 
}
 
$construct ="SELECT * FROM quotes WHERE $construct";
$run = mysql_query($construct);
 
$foundnum = mysql_num_rows($run);
 
if ($foundnum==0)
echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
Try more general words. for example: If you want to search 'how to create a website'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";
else
{
echo "You searched for <b>$search</b> &nbsp; &nbsp; $foundnum results found !<br><br><p>";
#echo "$foundnum results found !<p>";
 
while($runrows = mysql_fetch_assoc($run))
{
$title = $runrows ['quote'];
$desc = $runrows ['author'];
$url = $runrows ['source'];
 
echo "
<a href='$url'><b>$title</b></a><br>
$desc<br><br><br>
<!--<a href='$url'>$url</a><p>-->
";
 
}
}
 
}
}
 
?>
</div>
</div>
<div class="adda"><a href='insert.php'>Add<br />another<br />quote</a></div>
<div class="adda"><a href='index.php'>Back<br />to<br />search</a></div>
<div class="footer">
<div class="credits">Another fun, collaborative project by Payal Singh and Kelly Anne Johnson.</div>
</div>
</center>
</body>
</html>

