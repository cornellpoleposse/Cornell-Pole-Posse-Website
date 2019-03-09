
<!DOCTYPE html>
<html lang="en">
    <body>
        <link href="styles/style.css" rel="stylesheet" type="text/css">
    <?php $pages = [["index.php", "Home"], ["schedule.php", "Schedule"],
                    ["about.php", "About"], ["contact.php", "Contact"]];
          $current_file = basename($_SERVER['PHP_SELF']);
    ?>
    <div class="header">

        <div class="container">

            <div class="logo">
                <h1>Cornell Pole Posse</h1>
            </div>

            <div class="nav">
                <ul>
                    <?php foreach ($pages as $page) { ?>
                    <li class="navfont"><a class= <?php if ($current_file == $page[0]) echo "current_page"; else
                    { echo "navfont"; } ?> href= <?php echo $page[0] ?> ><?php echo $page[1] ?></a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>

    </div>

    </body>

</html>
