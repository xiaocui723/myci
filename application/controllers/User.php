<?php
/**
 * Created by PhpStorm.
 * User: Bicycle
 * Date: 2017/7/22
 * Time: 18:57
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function login() {
        $this->output->set_content_type('application/json');
        return json_encode(array('user_id' => '123456', 'user_name' => 'bicycle'));
    }
}