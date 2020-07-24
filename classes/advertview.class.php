<?php

    class AdvertView extends AdvertModel{

        public function showAds(){

            $results = $this->getAds();
            
            echo "<h2>Advertisements</h2>";
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