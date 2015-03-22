<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 15-2-13
 * Time: 下午10:39
 */
use Phalcon\Mvc\Model;

class MnUsers extends Model{
    public $id;
    public $username;
    public $password;

    /*
     * 模型 MnUsers 现在映射到了 “mn_user” 表。
     * initialize() 方法可以帮助在模型中建立自定义行为，例如指定不同的数据库表。
     *  initialize() 方法在请求期间只被调用一次。
     * */
    public function initialize(){
        $this->setSource("mn_user");
    }

}
