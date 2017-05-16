
<?php
    include 'connect.php';
    if (isset($_POST['useremail'])){
        $useremail=$_POST['useremail'];
    }
    if (isset($_POST['userpswrd'])){
        $userpswrd=$_POST['userpswrd'];
    }


    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr style="text-align:left;">
        <th style="width:100px;">criticId</th>
        <th style="width:150px";>criticName</th>
        <th style="width:150px";>criticBio</th>
        <th style="width:150px";>criticPhoto</th>
        <th style="width:150px";>criticEmail</th>
        <th style="width:150px";>criticPswrd</th>
     <?php
     $stmt=$db->prepare("SELECT * FROM `critics`    
    WHERE `criticEmail`= ? && `criticPswrd`= ? ");
     $stmt->bind_param('ss',$useremail,$userpswrd);
     $stmt->bind_result($criticId,$criticName,$criticBio,$criticPhoto,$criticEmail,$criticPswrd);
     $stmt->execute();
     while($stmt->fetch()){

    
    ?>

    <tr>
        <td><?php echo $criticId; ?></td>
        <td><?php echo $criticName; ?></td>
        <td><?php echo $criticBio; ?></td>
        <td><?php echo $criticPhoto; ?></td>
        <td><?php echo $criticEmail; ?></td>
        <td><?php echo $criticPswrd; ?></td>
    </tr>
    
    <?php
    
    }

    ?>


    </table>
    <?php
        $stmt->close();
    ?>

<p><b>Insert new record:</b></p>

<form action="insert.php" method="post">
    <table border="1" cellpadding="5" cellspacing="0">
        <tr style="text-align: left;">

        <th style="width:150px";>criticName</th>
        <th style="width:150px";>criticBio</th>
        <th style="width:150px";>criticPhoto</th>
        <th style="width:150px";>criticEmail</th>
        <th style="width:150px";>criticPswrd</th>
            <th>&nbsp;</th>
        </tr>    
        <tr>
            <td style="width: 150px;"><input type="text" name="criticName"></td>
            <td style="width: 200px;"><input type="text" name="criticBio"></td>
            <td style="width: 200px;"><input type="text" name="criticPhoto"></td>
            <td style="width: 200px;"><input type="text" name="criticEmail"></td>
            <td style="width: 200px;"><input type="text" name="criticPswrd"></td>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>


