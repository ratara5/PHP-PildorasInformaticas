<!--2/4 Responsible Class to connect to BD-->
<?php
    require 'config.php';

    class Connection{
        protected $connection_db;

        public function Connection(){
            $this->connection_db=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            if($this->connection_db->connect_errno){
              echo "Fallo al conectar".$this->connection_db->connect_error;
            }
            $this->connection_db->set_charset(DB_CHARSET);
        }
    }
?>