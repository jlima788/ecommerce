<?php

namespace Hcode;

use Rain\Tpl;

class Page {

    public function __contsruct(){

        $config = array(
            "tpl_dir"   => $_SERVER["DOCUMENT_ROOT"]."/views/",
            "cache_dir" => $_SERVER["DOCUMENT_ROOT"]."/views/cache/",
            "debug"     => false
        );

        Tpl::configure( $config );
    }

    public function __destruct(){

    }

}

?>