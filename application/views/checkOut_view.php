<?php $sum = 0;?>
<html>
<head>
    <title>Check out</title>
</head>
<body><?php if (is_null($msg) ) { ?>
    <h3 style="float: left; padding-left: 10%">Current Cart Contents:</h3>

    <!--    drawing the get details stuff -->
    <table style=" margin-top: 50px; margin-right: 5%;margin-left: 5%; float: right; border-style: inset; width: 88%;" >

        <tr style="line-height: 30px; width: 90%;">
            <!--            isbn-->
            <td>
                ISBN
            </td>
            <!--            title-->
            <td>
                Title
            </td>
            <!--            $-->
            <td>
                $
            </td>
            <!--            qty-->
            <td>
                Qty
            </td>
            <!--            total-->
            <td>
                Total
            </td>
        </tr>
        <br/><br/><br/>
        <?php if(!is_null($result)){foreach ($result as $row){?>
            <tr style="line-height: 30px; width: 90%;">
                <!--            isbn-->
                <td>
                    <?php echo $row->isbn ?>
                </td>
                <!--            title-->
                <td>
                    <?php echo $row->title ?>
                </td>
                <!--            $-->
                <td>
                    <?php echo $row->price ?>
                </td>
                <!--            qty-->
                <td>
                    <?php echo $row->qty ?>
                </td>
                <!--            total-->
                <td>
                    <?php $sum += $row->price * $row->qty ; echo $row->price * $row->qty ; ?>
                </td>
            </tr>
        <?php }}?>
        <tr style="line-height: 50px;">
            <!--space between total and table-->
            <br/>
        </tr>
        <tr style="line-height: 20px;">
            <!--            total-->
            <td>
                Total
            </td>
            <!--            empty-->
            <td>
            </td>
            <!--            empty-->
            <td>
            </td>
            <!--            empty-->
            <td>
            </td>
            <!--            total-->
            <td>
                <?php echo $sum; ?>
            </td>
        </tr>
    </table>


    <!--    end drawing the get details stuff -->

    <form method="post" action= <?php echo base_url(); ?>index.php/checkOut/process >

        <input type="radio" value="newAddress" name="choise" >Enter new shipping address <br>
        <input type="radio" value="newCC" name="choise">Do you want to enter new CreditCard Number <br>
        <input type="radio" value="prntInvo" name="choise">print invoice <br>

        <input type="submit" value="Next">
    </form>


    <!--    incase we can't create the order-->
<?php } else { ?>
    <h1 style="float: left; padding-left: 40%; border: solid;"><?php echo $msg ?></h1>
<?php } ?>
<h3><a href="../home">Return Home</a></h3>
</body>

</html>