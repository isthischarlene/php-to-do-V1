<?php
session_start();
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>To Do List Challenge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>To Do List</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="list-items"> 
            <input type="submit" name="add"value="Add">
        </form>
        

        <?php
            if($_POST) {
                echo "<ul><li>".$_POST['list-items']."</li></ul><br>";
            }
        ?>
        
        <script>
            $(document).ready(function (){

            })
        </script>

    </body>
</html>