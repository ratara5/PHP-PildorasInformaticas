<!--5 Child class of Connection, in order to use its methods and attributes. -->
<?php
    require_once 'connection.php';
    class UpdateSet extends Connection{
        public function __UpdateSet(){
            parent::__construct();            
        }
        public function rewrite_set($data1, $data2){
            $sql="UPDATE listacsvariables SET Descripción='".$data1."' WHERE Nombre='".$data2."';";
            $set=$this->connection_db->prepare($sql);
            $set->execute(array());
            //$records=$set->fetchAll(PDO::FETCH_ASSOC);
            $n=$set->rowCount();
            $set->closeCursor();
            return $n;
            $this->connection_db=null;

        }
    }
?>