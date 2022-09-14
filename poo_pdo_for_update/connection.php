<!--2/4 Responsible Class to connect to BD-->
<?php
    require_once 'config.php';

    class Connection{
        protected $connection_db;

        public function Connection(){

            try{
                $this->connection_db =new PDO("mysql:host=localhost;dbname=".DB_NAME."", "".DB_USER."", "".DB_PASSWORD."");
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->connection_db->exec("SET CHARACTER SET ".DB_CHARSET."");

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