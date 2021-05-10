<?php
        $mysqli = new mysqli  ("localhost", "root", "root", "week6_assignment");
        $sql = "SELECT 
                sales.customer_id,
                customers.username,
                customers.sex,
                products.name,
                sales.qty,
                sales.unit_price
                FROM sales
                left JOIN customers
                ON customers.id = sales.customer_id
                left JOIN products
                ON products.id = sales.product_id;
                ";
        $result =  $mysqli_query($mysqli, $sql);
        $resultCheck= $mysqli_num_rows($result);

        if($resultCheck>0){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['customer'];
            }

        }
        
        $mysqli ->close();
    ?>