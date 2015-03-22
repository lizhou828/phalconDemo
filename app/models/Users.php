<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 15-2-13
 * Time: 下午10:39
 */
use Phalcon\Mvc\Model;

class Users extends Model{
    public $id;
    public $name;
    public $email;

//    写原生的mysql_connect() mysql_select_db() mysql_query() 再循环结果集取数据
}
