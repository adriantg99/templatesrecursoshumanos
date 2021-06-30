<?php include('newdb.php');

    class autocompletar extends Database{
        function buscar($texto){
            $res = array();
            $query = $this->connect()->prepare('SELECT RFC from datospersonales where RFC LIKE :texto');
            $query->execute(['texto' => $texto . '%']);

            if($query->rowCount()){
                while($r = $query->fetch()){
                    array_push($res, $r['RFC']);
                }
                return $res;
            }
        }
    }

?>

