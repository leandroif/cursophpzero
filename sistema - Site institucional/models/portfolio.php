<?php
class portfolio extends model {

    public function getTrabalhos($n = '') {

        $array = array();

        $sql = "SELECT * FROM portfolio order by rand() ";
        if(!empty($n)){
            $sql .= "LIMIT ".$n;
        }
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){

            $array = $sql->fetchAll();

        }

        return $array;
    }


}