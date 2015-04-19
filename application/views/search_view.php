<html>
<head>
    <title>Search</title>
</head>
<body><?php if($no_order == null){ ?>
    <h3 style="float: left; padding-left: 40%" >Search By Author / Title</h3><br/><br/><br/><br/>

     <h4>Search By Title</h4>

<!--    form to get the search by Title-->
    <form method="post" action='<?php echo base_url();?>index.php/search/searchBy'>
        <input type="text" placeholder="Enter Title of The book" name="searchTitle">
        <input type="submit" value="Search">
    </form>
    <!--    /form-->
    <h4 >Search By Author</h4>
<!--    form to get the search by author-->
    <form method="post" action='<?php echo base_url();?>index.php/search/searchBy'>
        <input type="text" placeholder="Enter Author Name" name="searchAuthor">
        <input type="submit" value="Search">
    </form>
    <br/><br/><br/>
    <!--    /form-->

<?php if($isAvailable == true){?>
<!-- table to hold search result-->
    <table style=" margin-top: 50px; margin-right: 5%;margin-left: 5%; float: right; border-style: inset; width: 88%;" >

        <tr style="line-height: 30px; width: 90%;">
            <!--            isbn-->
            <td>
                ISBN
            </td>
            <!--            Author-->
            <td>
                Author
            </td>
            <!--            title-->
            <td>
                Title
            </td>
            <!--            $-->
            <td>
                price
            </td>
            <!--            Subject -->
            <td>
                Subject
            </td>

        </tr>
        <br/><br/><br/>
        <?php foreach ($searchResult as $row){?>
            <tr style="line-height: 30px; width: 90%;">
                <!--            isbn-->
                <td>
                    <?php echo $row->isbn ?>
                </td>
                <!--            author-->
                <td>
                    <?php echo $row->author ?>
                </td>
                <!--            title-->
                <td>
                    <?php echo $row->title ?>
                </td>
                <!--            $-->
                <td>
                    <?php echo $row->price ?>
                </td>
                <!--            $-->
                <td>
                    <?php echo $row->subject ?>
                </td>
            </tr>
        <?php }?>
    </table>
    <?php }else{ echo $isAvailable;}?>
    <h3><a href="../home">Return Home</a></h3>
    <!--    incase we can't create the search-->
<?php }else{ ?>
    <h1 style="float: left; padding-left: 40%; border: solid;"><?php echo $no_order?></h1>
<?php }?>
</body>

</html>