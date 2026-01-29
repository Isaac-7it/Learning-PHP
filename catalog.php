<!-- <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
    <label for="product_id">Product ID:</label>
    <input type="text" id="product_id" name="product_id"> <br>
    <select name="category" >
        <option value="ovenmitt">Pot Holder</option>
        <option value="fryingpan">Frying Pan</option>
        <option value="torch">Kitchen Torch</option>
    </select> <br>
    <input type="submit" name="submit">
</form>

Here are the submitted values:
product_id: <?php // echo $_POST['product_id'] ?? '' ?>
<br>
category: <?php // echo $_POST['category'] ?? ''?> -->

<form method="POST" action="eat.php">
<select name="lunch[]" multiple>
    <option value="pork">BBQ Pork Bun</option>
    <option value="chicken">Chicken Bun</option>
    <option value="lotus">Lotus Seed Bun</option>
    <option value="bean">Bean Paste Bun</option>
    <option value="nest">Bird-Nest Bun</option>
</select>
<input type="submit" name="submit">
</form>