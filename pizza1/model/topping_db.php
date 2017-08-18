<?php
// the try/catch for these actions is in the caller
function add_topping($db, $topping_name)  
{
$query = 'INSERT INTO toppings(topping_name) values(:name)';
 $statement = $db->prepare($query);
 $statement->bindValue(':name', $topping_name);
 $statement->execute();
 $statement->closeCursor();
}

function get_toppings($db) {
    $query = 'SELECT * FROM toppings';
    $statement = $db->prepare($query);
    $statement->execute();
    $toppings = $statement->fetchAll();
    return $toppings;    
}

?>