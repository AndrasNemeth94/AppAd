<?php

    class UsersModel extends Dbc{

        //USERS
        public function getUsers(){

            $sql ="SELECT * FROM users";
            
            $statement = $this->connect()->prepare($sql);
            $statement->execute();

            $results = $statement->fetchAll();
            return $results;
                /*while($row = $statement->fetch()){

                    echo $row['name'].'<br>';
              }*/
        }


    }