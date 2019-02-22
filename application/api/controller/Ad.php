<?php

namespace app\api\controller;
use think\Controller;
use think\Db;

/**
 * swagger: 广告
 */
class Ad
{
	/**
	 * get: 广告列表
	 * path: list
	 * method: list
	 * param: position - {int} 广告位
	 */
	public function list($position)
    {     
    	$map['ad_position_id'] = $position;
		$map['status'] = 1;	
		$info = Db::name('ad')->where($map)->order('id desc')->field('images')->select();
		if ($info) {
			$data['code'] = 200;
			$data['datas'] = $info;
			$data['msg'] = '获取广告列表成功';
			return json($data);	
		} else {
			$data['code'] = 404;
			$data['msg'] = '获取广告列表失败';
			return json($data);	
		}		
		
    }


}