<?php

namespace app\api\controller;
use think\Controller;
use think\Db;

/**
 * swagger: 文章
 */
class Article
{
	/**
	 * get: 文章列表
	 * path: list
	 * method: list
	 * param: rows - {int} 当前页
	 * param: pagesize - {int} 每页显示数据
	 */
	public function list($rows, $pagesize)
    {
        if($rows != '' || $pagesize != ''){	
			$info = Db::name('article')->order('id desc')->limit($rows . ',' . $pagesize)->field('title,photo,create_time')->select();
			if ($info) {
				$data['code'] = 200;
				$data['datas'] = $info;
				$data['msg'] = '获取文章列表成功';
				return json($data);	
			} else {
				$data['code'] = 404;
				$data['msg'] = '获取文章列表失败';
				return json($data);	
			}		
		}else{
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
    }


}