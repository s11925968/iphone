<?php 
$name="sameh essa";
$age=22;
$base=5.5;

?>
<!doctype html>
</html>
<head>
<title>
my project
</title>
<style>
.mony{
	background-color:white;
	position:absolute;
	
	margin:0px;
	
}
.container{
	position:relative;
	left:50%;
	top:50%;
	padding:5px;
	
	
	
}

.container img{
	
	width:30%;
	height:auto;
}
@media(min-width:768px){
	.container1.container2.container3.container4{
		width:750px;
	}
	
}
@media(min-width:350px){
	.container1.container2.container3.container4{
		width:350px;
	}
	
}
@media(min-width:992px){
	.container{
		width:970px;
	}
}
@media(min-width:1200px){
	.container{
		width:1170px;
	}
	
}
</style>
</head>
<body>
<div class="mony">
<div class="container">
<h1>
my name is:
<?php
echo $name;
 ?>
</h1>
<p>
l am <?php 
echo $age;
echo "<br>";
?>
l have Monthly salary <?php 
echo $base;
echo "$<br>";
?>
<img class="img5" src="img/1.jpeg"alt="monthly_salary">
<?php 
$x=20;
function myTest(){
	//this in side the inside function
	//echo "hello everyone this my age :$x";
}
myTest();
echo "<br>";
//this outside the funcinon 
echo "hello everyone this my age :$x";

?>

</p>
</div>
</div>
</body>

</html>