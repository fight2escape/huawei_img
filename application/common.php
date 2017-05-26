<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**
 * 生成加密后的密码
 * @param $pwd
 * @return string
 */
function getPassword($pwd){
    return md5(md5(md5($pwd).md5(config('SALT'))).config('PWD_SALT'));
}

/**
 * 生成新session
 * @param $username
 * @return string
 */
function getNewSession($username){
    return md5(md5($username.time()).config('SALT'));
}

/**
 * 统一返回格式
 * @param $status
 * @param array $data
 * @param string $msg
 * @return string
 */
function res($msg='', $status=0, $data=[]){
    $res = [
        'message'   =>  $msg,
        'status'    =>  $status,
        'data'      =>  $data,
    ];
    return json_encode($res);
}