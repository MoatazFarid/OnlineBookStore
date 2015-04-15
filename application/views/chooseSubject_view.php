<?php ?>
<html>
<head>
    <title>Choose Subject</title>
</head>
<body>

<h1>Browse By Subject</h1> <br/>
<!--start view the subjects -->
<table>
<?php
if(isset($subjectName)){

    foreach ($subjectName as $row) {

        echo "<tr>";
        echo "<td>" . $row->subject . "</td>";
        echo "</tr>";

    }

}
?>
</table


<!--end view the subjects-->

    <!--    start getbooks from subject form -->
<form method="post" action='<?php echo base_url(); ?>index.php/chooseSubject/getBooksFromSubject' id="books_by_subject_form">
    <h3>Enter Subject Name to Browse</h3>
    <input type="text" placeholder="Enter subject Name " name="book_subject">
    <input type="submit">
</form>
<!--eng get books from subject form-->



<!--    start enter ISBN form -->
<?php if(isset($_POST['book_subject'])){?>
    <!-- that form won't be available unless the book_subject btn has been clicked -->
<form method="post" action='<?php echo base_url(); ?>index.php/chooseSubject/addToCart' id="books_by_subject_form">
    <h3>Enter ISBN to add to Cart</h3>
    <input type="text" placeholder="Enter ISBN " name="book_isbn">
    Quantity<input type="number" name="book_isbn_qty">
    <input type="submit">
</form>
<?php }?>
<!--eng  enter ISBN form-->




<?php if(isset($_POST['book_subject'])){?>
<!--// this table won't be viewed anless the books_by_subject_form is submitted -->
<table border="1">
    <tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Subject</th>
    </tr>
    <?php
    foreach ($books_by_subject_form as $row) {

        echo "<tr>";
        echo "<td>" . $row->isbn . "</td>";
        echo "<td>" . $row->title . "</td>";
        echo "<td>" . $row->author . "</td>";
        echo "<td>" . $row->price . "</td>";
        echo "<td>" . $row->subject . "</td>";
        echo "</tr>";

    }

    ?>

</table>

<?php }?>
</body>
</html>