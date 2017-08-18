<?php include '../view/header.php'; ?>
<main>
    <h1>Add Topping</h1>
    <form action="." method="post" id="topping_add">
        <input type="hidden" name="action" value="add_topping">

        
        <br>

        <label>Topping:</label>
        <input type="text" name="topping_name" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Topping" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_toppings">View Topping List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>