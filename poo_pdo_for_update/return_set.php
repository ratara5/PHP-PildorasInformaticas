<!--3/4 Child class of Connection, in order to use its methods and attributes. -->
<?php
    require_once 'connection.php';
    class ReturnSet extends Connection{
        public function __ReturnSet(){
            parent::__construct();            
        }
        public function get_set(){
            $sql="SELECT Nombre, Descripción from listacsvariables";
            $set=$this->connection_db->prepare($sql);
            $set->execute(array());
            $records=$set->fetchAll(PDO::FETCH_ASSOC);
            $set->closeCursor();
            return $records;
            $this->connection_db=null;

        }
    }
?>