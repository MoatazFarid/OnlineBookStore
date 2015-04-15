<html>
<head>
    <title>HOME</title>
</head>
    <body>
        <form method="post" action='<?php echo base_url();?>index.php/home/selectChoice' >
                <table border="0.5" width="50%">


                <tr>
                    <td><label style=" padding-left: 100px">Browse by Subject</label></td>
                    <td><input type="submit" name="browse_by_subject" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">Search by Author/Title/Subject</label></td>
                    <td><input type="submit" name="search_author_title_subject" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">View/Edit Shopping Cart</label></td>
                    <td><input type="submit" name="view_edit_cart" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">Check Order Status</label></td>
                    <td><input type="submit" name="check_order_status" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">Check Out</label></td>
                    <td><input type="submit"  name="check_out" value="click Here"></td>
                </tr>


                <tr>
                   <td><label style=" padding-left: 100px">One Click Check Out</label></td>
                   <td><input type="submit"  name="one_clk_check_out" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">View/Edit Personal Information</label></td>
                    <td><input type="submit"  name="view_edit_personal_info" value="click Here"></td>
                </tr>

                <tr>
                    <td><label style=" padding-left: 100px">Logout</label></td>
                    <td><input type="submit"  name="logout" value="click Here"></td>
                </tr>

                </table>
        </form>

    </body>
</html>
