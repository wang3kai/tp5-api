<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// api.movi.com -> www.movi.com/index.php/api
Route::domain('api', 'api');
// api.movi.com/user/login -> api.movi.com/user
Route::post('user', 'user/login');

/*return [
'__pattern__' => [
'name' => '\w+',
],
'[hello]' => [
':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
':name' => ['index/hello', ['method' => 'post']],
],

];*/
