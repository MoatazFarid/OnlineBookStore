<?php $sum=0;?>
<html>
<head>
    <title>Invoice</title>
</head>
<body><?php if($no_order == null){ ?>
        <h3 style="float: left; padding-left: 40%" >Invoice for Order no.<?php echo $invoice->ono; ?></h3>
    <table style=" margin-top: 50px; margin-right: 20%; float: right; border: dashed;">

        <tr>
            <td style="padding: 10px 50px 10px 10px;">
                Shipping Address
            </td>
            <td>
                Billing Address
            </td>
        </tr>

        <tr style="line-height: 20px;">
            <td>
                Name: <?php echo $invoice->fname." ".$invoice->lname; ?>
            </td>
            <td>
                Name: <?php echo $invoice->fname." ".$invoice->lname; ?>
            </td>
        </tr>

        <tr style="line-height: 20px;">
            <td>
                Address :<?php echo $invoice->shipAddress; ?>
            </td>
            <td>
                Address :<?php echo $invoice->address; ?>
            </td>
        </tr>

        <tr style="line-height: 20px;">
            <td>
                          <?php echo $invoice->shipCity; ?>
            </td>
            <td>
                          <?php echo $invoice->city; ?>
            </td>
        </tr>

        <tr style="line-height: 20px;">
            <td>
                          <?php echo $invoice->shipZip; ?>
            </td>
            <td>
                         <?php echo $invoice->zip; ?>
            </td>
        </tr>
    </table>

    <table style=" margin-top: 50px; margin-right: 5%;margin-left: 5%; float: right; border-style: inset; width: 88%;" >

        <tr style="line-height: 30px; width: 90%;">
            <!--            isbn-->
            <td>
                ISBN
            </td>
            <!--            ono-->
            <td>
                Order No:
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
        <?php foreach ($invoice2 as $row){?>
            <tr style="line-height: 30px; width: 90%;">
                <!--            isbn-->
                <td>
                    <?php echo $row->isbn ?>
                </td>
                <!--            ono-->
                <td>
                    <?php echo $row->ono ?>
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
        <?php }?>
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
<h3><a href="../home">Return Home</a></h3>
<!--    incase we can't create the order-->
<?php }else{ ?>
<h1 style="float: left; padding-left: 40%; border: solid;"><?php echo $no_order?></h1>
<?php }?>
</body>

</html>