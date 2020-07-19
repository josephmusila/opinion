<html>
    <head>
        <title> 
            javascript library poll results
        </title>
    </head>
    <body>
        <h2>Opinion poll results</h2>
        <p><b>what is you favourite javascript?</b></p>
        <p><b> <?php echo $choices_count[0];?></b>people have thus far taken this poll:</p>
        <table>
            <?php echo($table_rows); ?>
        </table>
    </body>
</html>