
<?php
	include 'connect.php';
	if (isset($_POST['useremail'])){
		$useremail=$_POST['useremail'];
	}
	if (isset($_POST['userpswrd'])){
		$userpswrd=$db->real_escape_string($_POST['userpswrd']);
	}

	$sql="SELECT * FROM `critics` 	
	WHERE `criticEmail`='$useremail' && `criticPswrd`='$userpswrd'";
	$result=$db->query($sql);
	?>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr style="text-align:left;">
		<th style="width:100px;">criticId</th>
		<th style="width:150px";>criticName</th>
		<th style="width:150px";>criticBio</th>
		<th style="width:150px";>criticEmail</th>
		<th style="width:150px";>criticPswrd</th>
	 <?php
    
    while ($row = $result->fetch_object()) {
        $criticId = $row->criticId;
        $criticName = htmlentities($row->criticName, ENT_QUOTES, "UTF-8");
        $criticBio = htmlentities($row->criticBio, ENT_QUOTES, "UTF-8");
        $criticEmail = htmlentities($row->criticEmail, ENT_QUOTES, "UTF-8");
        $criticPswrd = htmlentities($row->criticPswrd, ENT_QUOTES, "UTF-8");
    ?>

    <tr>
        <td><?php echo $criticId; ?></td>
        <td><?php echo $criticName; ?></td>
        <td><?php echo $criticBio; ?></td>
        <td><?php echo $criticEmail; ?></td>
        <td><?php echo $criticPswrd; ?></td>
    </tr>
    
    <?php
    
    }

    ?>


	</table>

