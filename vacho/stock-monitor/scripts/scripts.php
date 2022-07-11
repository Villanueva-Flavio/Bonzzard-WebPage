<?php 


        
        function renderTable($min,$max){
            $ip = 'localhost';
            $user = 'test';
            $pw = 'flajonasql';
            $database = 'pagina';
            
            $mysqli = new mysqli($ip, $user, $pw, $database);
        
            /* verificar la conexión */
            if ($mysqli->connect_errno) {
                printf("Conexión fallida: %s\n", $mysqli->connect_error);
                die();
            }
                

            $consulta = "SELECT * FROM stock WHERE id >= $min AND id <= $max";
        
            $result = $mysqli->query($consulta);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["datetime"]."</td><td>".$row["aapl"]."</td><td>".$row["adbe"]."</td><td>".$row["amd"]."</td><td>".$row["amzn"]."</td><td>".$row["asml"]."</td><td>".$row["avgo"]."</td><td>".$row["cmcsa"]."</td><td>".$row["csco"]."</td><td>".$row["ebay"]."</td><td>".$row["goog"]."</td><td>".$row["googl"]."</td><td>".$row["hsic"]."</td><td>".$row["intc"]."</td><td>".$row["msft"]."</td><td>".$row["pypl"]."</td><td>".$row["vrsk"]."</td></tr>";
                }
                echo "</table>"; 
            }else{
                echo "No results";
            }
        
            $mysqli->close();
    }






?>