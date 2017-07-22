<?php
/**
 * Created by PhpStorm.
 * User: Bicycle
 * Date: 2017/7/22
 * Time: 18:57
 */

class User extends CI_Controller {

    public function login() {
        return json_encode(array('user_id' => '123456', 'user_name' => 'bicycle'));
    }
}