<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
                echo 'Connexion réussie';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>