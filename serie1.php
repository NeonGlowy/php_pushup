<?php
//qn1
phpinfo()
?>

<?php
//qn2
// definne the frst string with single escape sequence
$samplestring1='tomorrow I \'ll learn php global variables';

//define the second string with double escape sequence
$samplestring2='this is a bad command :del c : \\ *.*';
echo $samplestring1;
echo'<br>';
echo$samplestring2;
?>

<?php
//qn3
//def variable
$var="php tutorial";
?>
<html>
<head>
<title><?php echo $var?></title>
</head>
<body>
<h3><?php echo $var?></h3>
<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general
purpose scripting language. It is a cross-platform, HTML embedded server-side 
scripting language and is especially suited for web development. 
Go to the PHP Tutorial. </p>
<a href ="/php tutorial"><?php echo $var?></a>
</body>
</html>


<html>
<head>
<title>PHP form</title>
</head>
<body>
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?>>
//php self return the current page
<input type="text" name="username">
<input type="submit" value="submit" name="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]==POST){
    //get username 
    $username=$_POST['username'];
    $submit=$_POST['submit'];
}
?>
</body>
</html>

<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip=$_SERVER["HTTP_CLIENT_IP"];
}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else {
    $ip=$_SERVER["REMOTE_ADDR"];
}
echo $ip;
?>

<?php
//qn6
// Get the User-Agent string from the browser
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Output the User-Agent string
echo "Your User-Agent is: " . $user_agent;
?>

<?php
//qn7
// Get the current file name
$current_file = basename(__FILE__);
// Output the current file name
echo "The current file name is: " . $current_file;
?>

<?php
//qn8
// URL 
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

// Parse the URL and get its components
$parsed_url = parse_url($url);

// Output the components
echo "Scheme: " . $parsed_url['scheme'] . "<br>";
echo "Host: " . $parsed_url['host'] . "<br>";
echo "Path: " . $parsed_url['path'];
?>

<?php
//qn9
// Sample string
$string = "PHP Tutorial";

// Get the first character
$first_character = substr($string, 0, 1);

// Get the rest of the string
$string_remaining = substr($string, 1);
// Output the string with colored first character
echo "<span style='color:red;'>" . $first_character . "</span>" . $string_remaining;
?>

<?php
//qn10
// Check if HTTPS is on
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = "https";
} else {
    $protocol = "http";
}

// Output the protocol
echo "The page is called from: " . $protocol;
?>






