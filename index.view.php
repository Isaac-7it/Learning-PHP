<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Project</title>
    </head>
    <body>
        <?php require 'index.php' ?>
        <!-- <?php if ($is_admin): ?>
            <h1>Welcome Admin!</h1>
            <a href="">Log Out</a>
            <?php $can_edit = true ?>
                <?php if ($can_edit): ?>
                <a href="">Edit</a>
            <?php endif ?>
        <?php elseif (!$is_admin): ?>
            <h1>You are not an admin! Proceed to the users page using this <a href="">link</a></h1>
        <?php endif ?> -->

        <!-- <?php if ($is_authenticated): ?>
            <h1>Welcome!</h1>
        <?php elseif(!$is_authenticated): ?>
            <h1>You are unauthorized to view this page!</h1>
        <?php endif ?> -->

        <?php 
        $sum = 0;
        $j = 1; 
        ?>
        <?php while ($j < 10): ?>
            <h1><?php echo $j ?></h1>
        <?php $j++ ?>
        <?php endwhile; ?>
    </body>
</html>