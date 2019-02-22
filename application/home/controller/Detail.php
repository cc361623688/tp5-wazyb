<?php
namespace app\home\controller;
use app\home\model\DetailModel;
use think\Db;

class Detail extends Base
{
    public function index()
    {
    	$id = input('param.id');
    	//dump($id);exit;
        $model = new DetailModel();
        $detail = $model->getDetail($id);
        //dump($list);exit;
        $up = Db::name('article')->where('views !=0 AND id <' . $id)->order('id desc')->limit(1)->find();
        $down = Db::name('article')->where('views !=0 AND id >' . $id)->order('id')->limit(1)->find();
        $this->assign('detail',$detail);
        $this->assign('up',$up);
        $this->assign('down',$down);
        return $this->fetch();
    }
}
