<?php


namespace App\Plugins\Mail;

/**
 * Class Mail
 * @name Mail
 * @version 1.0.0
 * @package 发信邮箱组件
 * @author Inkedus
 * @link https://github.com/zhuchunshu/sf-mail
 */
class Mail
{
    public function handler(): void
    {

        $this->setting();
        $this->composer();
        $this->helpers();
    }

<<<<<<< HEAD
    public function composer(): void
    {
=======
    public function composer(){
>>>>>>> 57e24dea87e91f5b843f8b25da7d3129beff773e
        require_once __DIR__."/vendor/autoload.php";
    }

    public function setting(): void
    {
        require_once __DIR__."/setting.php";
    }

<<<<<<< HEAD
    public function helpers(): void
=======
    public function helpers()
>>>>>>> 57e24dea87e91f5b843f8b25da7d3129beff773e
    {
        require_once __DIR__."/helpers.php";
    }
}