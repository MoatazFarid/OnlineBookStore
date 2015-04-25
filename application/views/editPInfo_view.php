<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>
    <title>edit info  </title>
</head>
<body>
<div id='login_form'>
    <form action='<?php echo base_url();?>index.php/personalInfo/editInfo' method='post' name='process'>
        <h2>User edit</h2>
        <br />

        <label for='password'>Password</label>
        <input type='password' name='password' id='password' size='25' /><br />

        <label for='username'>first name</label>
        <input type='text' name='fname' id='username' size='25' /><br />

        <label for='username'>last name</label>
        <input type='text' name='lname' id='username' size='25' /><br />

        <label for='username'>address</label>
        <input type='text' name='address' id='username' size='25' /><br />

        <label for='username'>city</label>
        <input type='text' name='city' id='username' size='25' /><br />

        <label for='username'>state</label>
        <input type='text' name='state' id='username' size='25' /><br />

        <label for='username'>zip</label>
        <input type='text' name='zip' id='username' size='6' /><br />

        <label for='username'>phone</label>
        <input type='text' name='phone' id='username' size='10' /><br />

        <label for='username'>email</label>
        <input type='text' name='email' id='username' size='10' /><br />

        <label for='username'>credit card type</label>

        Visa<input type='checkbox' value="visa" name="cct"/><br />
        AMEX<input type='checkbox' value="amex" name="cct"/><br />

        <label for='username'>Credit Card Number</label>
        <input type='text' name='ccno' id='username' size='8' /><br />


        <input type='Submit' value='Login' />
    </form>
</div>
</body>
</html>