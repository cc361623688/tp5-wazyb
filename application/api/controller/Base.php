<?php

namespace app\admin\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {

        $config = cache('db_config_data');

        if(!$config){            
            $config = load_config();                          
            cache('db_config_data',$config);
        }
        config($config); 

    }
}