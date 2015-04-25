<html>
<?php foreach($info as $row){?>
    <br>fname :
    <?php echo $row->fname?>
    <br>
    <br>lname :
    <?php echo $row->lname?>
    <br>
    <br>Email :
    <?php echo $row->email?>
    <br>
    <br>Address :
    <?php echo $row->address?>
    <br>
    <br>City :
    <?php  echo $row->city?>
    <br>
    <br>Zip :
    <?php echo $row->zip?>
    <br>
    <br>State :
    <?php echo $row->state?>
    <br>
    <br>PHONE :
    <?php echo $row->phone?>
    <br>

<?php }?>
<form method="post" action='<?php echo base_url();?>index.php/personalInfo/editRed'>
    <input type="submit" value="edit Personal Info">
</form>
</html>