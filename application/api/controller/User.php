<?php

namespace app\api\controller;
use think\Controller;
use think\Db;

/**
 * swagger: 用户中心
 */
class User
{
	/**
	 * post: 登陆
	 * path: login
	 * method: login
	 * param: account - {string} 手机号
	 * param: password - {string} 密码
	 */
	public function login($account, $password) {
        
		if ($account != '' || $password != '') {
			$map['account'] = $account;
			$map['password'] = md5($password);		
			$user = Db::name('user')->where($map)->find();
			if ($user == false)
			{	
				$data['code'] = 403;
				$data['msg'] = '账号或密码错误';
				return json($data);
			} else {
				$data['code'] = 200;
				$data['datas'] = $user;
				$data['msg'] = '登录成功';
				return json($data);
			}
		} else {
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
			
    }


	/**
	 * post: 注册
	 * path: register
	 * method: register
	 * param: account - {string} 手机号
	 * param: nickname - {string} 昵称
	 * param: password - {string} 密码
	 * param: head_img - {string} 头像
	 */
	public function register($account, $nickname, $password, $head_img) {
        
		if ($account != '' || $password != '') {
			$param = [
	            'account' => $account,
	            'nickname' => $nickname,
	            'password' => md5($password),
	            'head_img' => $head_img,
	            'status'   => 1,
	            'token' => md5($account.$password)
	        ];		
			$user = Db::name('user')->insert($param);
			if ($user)
			{	
				$data['code'] = 200;
				$data['msg'] = '注册成功';
				return json($data);
			} else {
				$data['code'] = 500;
				$data['datas'] = $user;
				$data['msg'] = '注册失败';
				return json($data);
			}
		} else {
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
			
    }


	/**
	 * get: id
	 * path: getUserInfo
	 * method: getUserInfo
	 * param: id - {int} 用户id
	 */
	public function getUserInfo($id) {
		if ($id != '') {
			$user = Db::name('user')->where('id', $id)->find();
			if ($user) {
				$data['code'] = 200;
				$data['datas'] = $user;
				$data['msg'] = '获取用户信息成功';
				return json($data);
			} else {
				$data['code'] = 404;
				$data['msg'] = '用户不存在';
				return json($data);
			}
			
		} else {
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
		
	}


	/**
	 * get: 获取会话用户信息
	 * path: getAllUserInfos
	 * method: getAllUserInfos
	 * param: userids - {int} 用户id
	 */
	public function getAllUserInfos($userids) {
		if ($userids != '') {
			$map['id']=array('in',$userids);
			$user = Db::name('user')->where($map)->select();
			if ($user) {
				$data['code'] = 200;
				$data['datas'] = $user;
				$data['msg'] = '获取用户信息成功';
				return json($data);
			} else {
				$data['code'] = 404;
				$data['msg'] = '用户不存在';
				return json($data);
			}
			
		} else {
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
		
	}


	/**
	 * get: 获取所有用户信息
	 * path: getUser
	 * method: getUser
	 * param: userid - {string} 用户id
	 */
	public function getUser($userid) {
	
		$user = Db::name('user')->where('id !='.$userid)->select();
		if ($user) {
			$data['code'] = 200;
			$data['datas'] = $user;
			$data['msg'] = '获取用户信息成功';
			return json($data);
		} else {
			$data['code'] = 404;
			$data['msg'] = '用户不存在';
			return json($data);
		}
							
	}



    //上传头像
    public function upload(){
       $file = request()->file('file');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/images');
       if($info){
            $data['status'] = 1;
			$data['info'] = $info->getSaveName();
			return json($data);
        }else{
        	$data['status'] = 0;
			$data['info'] = $file->getError();
			return json($data);
        }
    }




	/**
	 * post: 修改手机号
	 * path: editphone
	 * method: editphone
	 * param: id - {int} 用户id
	 * param: phone - {string} 手机号
	 */
    public function editphone($id, $phone) {
    	if ($id != '' || $phone != '') {
			$info = Db::name('admin')->where('id',$id)->update(['phone' => $phone]);
			if($info){
				$data['code'] = 200;				
				$data['msg'] ='修改成功';
				return json($data);
			}else{
				$data['code'] = 403;
				$data['msg'] ='修改失败';
				return json($data);
			}
		} else {
			$data['code'] = 400;
			$data['msg'] = '参数错误';
			return json($data);
		}
	}


	/**
	 * post: 修改密码
	 * path: editpwd
	 * method: editpwd
	 * param: id - {int} 用户id
	 * param: oldpwd - {string} 旧密码
	 * param: oldpwd - {string} 新密码
	 */
	public function editpwd($id, $oldpwd, $newpwd){

		$oldpwd = md5(md5($oldpwd) . config('auth_key'));	
		$newpwd = md5(md5($newpwd) . config('auth_key'));	
		$user = Db::name('admin')->where('id',$id)->field('id,password')->find();
		if($user['password'] != $oldpwd){
			$data['code'] = 403;
			$data['msg'] ='原密码错误';
			return json($data);
		}else{
			$pwd['password'] = $newpwd;
			$info = Db::name('admin')->where('id',$id)->update($pwd);
			if($info){
				$data['code'] = 200;
				$data['msg'] ='修改成功';
				return json($data);
			}else{
				$data['code'] = 0;
				$data['msg'] ='修改失败';
				return json($data);
			}
			
		}
	}

	public function ceshi(){

		$t1 = "XM_".random_str(20);
        return $t1;  
	}
}