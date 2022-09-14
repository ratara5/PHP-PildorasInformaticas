<!--2/? Doesn't it use it in this folder-->
<?php
    require 'config.php';

    class Connection{
        protected $connection_db;

        public function Connection(){

            try{
                $this->connection_db =new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->connection_db->exec("SET CHARACTER SET utf8");

                return $this->connection_db;

            }catch(Exception $e){
                echo "la linea de error es: ".$e->getLine();
            }

            /*ONLY POO
            $this->connection_db=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            if($this->connection_db->connect_errno){
              echo "Fallo al conectar".$this->connection_db->connect_error;
            }
            $this->connection_db->set_charset(DB_CHARSET);
            */
        }
    }
?>