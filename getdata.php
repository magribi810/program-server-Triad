<?php
	$a=$_POST["a="];
	$b=$_POST["b="];
	$c=$_POST["c="];
	$d=$_POST["d="];
	$e=$_POST["e="];
	$f=$_POST["f="];
	$g=$_POST["g="];
	$h=$_POST["h="];
	$i=$_POST["i="];
	$j=$_POST["j="];
	$k=$_POST["k="];
	$l=$_POST["l="];
	$m=$_POST["m="];
	$n=$_POST["n="];
	$o=$_POST["o="];
	$p=$_POST["p="];
	$q=$_POST["q="];
	$r=$_POST["r="];

	$Write1="<?php $" . "a='" . $a . "'; " . 
	"$" . "b='" . $b . "'; " . 
	"$" . "c='" . $c . "'; " . 
	"$" . "d='" . $d . "'; " .
	"$" . "e='" . $e . "'; " .  
	"$" . "f='" . $f . "'; " . 
	"$" . "g='" . $g . "'; " . 
	"$" . "h='" . $h . "'; " . 
	"$" . "i='" . $i . "'; " . 
	"$" . "j='" . $j . "'; " . 
	"$" . "k='" . $k . "'; " . 
	"$" . "l='" . $l . "'; " .
	"$" . "m='" . $m . "'; " . 
	"$" . "n='" . $n . "'; " .
	"$" . "o='" . $o . "'; " . 
	"$" . "p='" . $p . "'; " . 
	"$" . "q='" . $q . "'; " . 
	"$" . "r='" . $r . "'; " . " ?>";

	file_put_contents('datacontainer.php',$Write1);


?>