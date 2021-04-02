<?php
    date_default_timezone_set('America/Guyana');
?>

<html>
<head>
<meta charset="ETF-8">
<link rel="stylesheet" href="commentStyles.css">
<title> Comment Section </title>
<link rel="stylesheet" href="commentStyles.css">
</head>
<body>
<?php
echo "<div id='respond'>

<h3>Leave a Comment</h3>

<form>
    <input type='hidden' name='uId' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button name='submit' onClick='' type='submit'>Comments</button>
</form>

</div>";
?>
</body>
</html>