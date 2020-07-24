<?php

    class AdvertModel extends Dbc{

        //ADVERTISEMENTS
        public function getAds(){

            $sql ="SELECT advertisements.id, advertisements.title,users.id,users.name
            FROM advertisements
            INNER JOIN users ON advertisements.userid = users.id";
            
            $statement = $this->connect()->prepare($sql);
            $statement->execute();

            $results = $statement->fetchAll();
            return $results;

                /*while($row = $statement->fetch()){

                    echo $row['name'].' '.$row['title'].'<br>';
                }*/
         
        }
    }
?>