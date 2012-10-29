<?php
    $pizzaMenu = array(
                    array("Plain", 3.5, 6.25, 8),
                    array("Vegetarian", 4.35, 7.6, 12),
                    array("Pepperoni", 7.25, 10.75, 14),
                    array("Hawaiian", 8, 12.5, 15.5)
                 );

    //Examples:
    //medium vegetarian price: $pizzaMenu[1][1];
    //large hawaiian price: $pizzaMenu[3][2];
    //small pepperoni price: $pizzaMenu[2][0];
     
?>
<!DOCTYPE html>
<html>
    <head><title></title>
        <style type="text/css">
        </style>
    </head>
    <body>
        <h3>MENU</h3>
        <table width="200" cellpadding="1" cellspacing="1" border="1">
            <thead>
                <tr>
                    <td></td>
                    <th>Small</th>
                    <th>Medium</th>
                    <th>Large</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($pizzaMenu as $row) {
                        echo "<tr>";
                        foreach ($row as $pizzaType) {
                            echo "<td>$pizzaType</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>

</html>
