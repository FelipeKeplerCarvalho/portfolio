<?php 

class CTR_geral{

    public static function get_info()
    {
        $obj = new stdClass();

        $obj->redes = get_field('midia_social','options');
        

        return $obj;

    }

};





