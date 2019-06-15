<?php
namespace app\index\controller;
use think\Db;
class Index extends \think\Controller
{
    public function index()
    {
        $res = Db::table('user')->select();
        var_dump($res);
        return $this->fetch('index', [
            'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);
        return view();
    }
    public function abc()
    {
        return view();
        // echo json_encode(['message'=>'ok']);
    }

}
