<!--4/4 Draw results of return_set->get_set())--> 
<?php
    require_once "return_set.php";
    $return_set=new ReturnSet();
    $array_for_set=$return_set->get_set();   
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
             <th>Descripción</th>
         </tr>";
         
        foreach ($array_for_set as $element){
            $name = $element['Nombre'];
            $depc = $element['Descripción'];

            echo "<tr>
                 <td>".$name."</td>
                 <td>".$depc."</td>
             </tr>";
            
            //...process description
            // $depc_expl=explode("\n",$depc);
            // $depc_expl=explode("[",$depc);
            // $depc_proc=$depc_expl[0];

            // require_once "update_set.php";
            // $update_set=new UpdateSet();
            // $n=$update_set->rewrite_set($depc_proc,$name);    
        }
        echo "</table>";
        echo "Se han actualizado ".$n." registros";
    ?>
</body>
</html>