<?php

namespace app\home\controller;
use app\home\model\BaseModel;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
       
    	$model = new BaseModel();
    	$cate = $model->getAllCate();
    	//dump($cate);exit;
        $this->assign('cate', $cate);

    }
}