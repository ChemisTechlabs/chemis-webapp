<?php
include "../head.php";
$new_id = $_GET['new'];

	$query = "SELECT * FROM `news` WHERE `id`='$new_id' LIMIT 1";
        $result = mysql_query($query);
        if (mysql_num_rows($result) != 1)
        {
            print "<p><center>This news does not exist!<p>\n<br />\n<a href=\"index.php\">Admin center</a>\n"; exit;
	}

$query = "DELETE FROM `news` WHERE `id`='$new_id'";

if (mysql_query($query))
{
    print "<p><center>News successfully removed!<p>\n<br />\n<a href=\"index.php\">Admin center</a>\n";
}
else
{
    print "Error:" . mysql_error() . "\n";
}
?>
</body>
</html> 