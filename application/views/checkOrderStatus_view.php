<?php $sum = 0; ?>
<html>
<head>
    <title>Check orders Status</title>
</head>
<body><?php if ($no_order == null) { ?>
    <h3 style="float: left; padding-left: 40%">Orders Made By <?php echo $username; ?></h3>

    <table style=" margin-top: 50px; margin-right: 5%;margin-left: 5%; float: right; border-style: inset; width: 88%;">

        <tr style="line-height: 30px; width: 90%;">
            <!--            ono-->
            <td>
                Order No:
            </td>
            <!--            total-->
            <td>
                RECEIVED DATE
            </td>
            <!--            total-->
            <td>
                SHIPPED DATE
            </td>
        </tr>
        <br/><br/><br/>
        <?php foreach ($order as $row) { ?>
            <tr style="line-height: 30px; width: 90%;">
                <!--            ono-->
                <td>
                    <?php echo $row->ono ?>
                </td>
                <!--            total-->
                <td>
                    <?php echo $row->received; ?>
                </td>
                <!--            total-->
                <td>
                    <?php echo $row->shipped; ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    <h3>Enter the Order No to display its details</h3>
    <form method="post" action= <?php echo base_url(); ?>index.php/invoice/getOrderDetails >
        <input type="number" name="reqOrderNo_checkOrderStatus" placeholder="Enter Order Number">
        <input type="submit" value="Get Details">
    </form>

<!--    drawing the get details stuff -->



<!--    end drawing the get details stuff -->

    <h3><a href="../home">Return Home</a></h3>
    <!--    incase we can't create the order-->
<?php } else { ?>
    <h1 style="float: left; padding-left: 40%; border: solid;"><?php echo $no_order ?></h1>
<?php } ?>
</body>

</html>