<!--3/4 Child class of Connection, in order to use its methods and attributes. -->
<?php
    require 'connection.php';
    class ReturnSet extends Connection{
        public function __ReturnSet(){
            parent::__construct();            
        }
        public function get_set($data){
            $set=$this->connection_db->query("SELECT * FROM listacsvariables WHERE Nombre='".$data."';");
            $records=$set->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }
?>