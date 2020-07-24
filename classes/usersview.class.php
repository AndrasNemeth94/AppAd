<?php

    class UsersView extends UsersModel{


         function showUsers(){

            $results = $this->getUsers();
            
            echo "<h2>Users</h2>";
            echo "<table>";
                    
            foreach($results as $row){
            
                echo "<tr>";
                foreach($row as $column){
                    echo "<th>".$column."</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }  
       