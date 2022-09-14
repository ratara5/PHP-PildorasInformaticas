<!--4/4 Draw results of return_set->get_set())--> 
<?php
    require "return_set.php";
    $search_name=$_GET["inp_name"];
    $return_set=new ReturnSet();
    $array_for_set=$return_set->get_set($search_name);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show records</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
         echo "<table id='id1'>
         <tr>
             <th>Nombre</th>
             <th>Tipo</th>
             <th>Categoría</th>
         </tr>";
         
        foreach ($array_for_set as $element){
            echo "<tr>
                 <td>".$element['Nombre']."</td>
                 <td>".$element['Tipo']."</td>
                 <td>".$element['Categorías']."</td>
             </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>