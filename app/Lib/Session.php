<?php

/**
 * class Session
 * @package: ZuniPHP
 * @author: Estefanio Nunes dos Santos <estefanions@gmail.com>
 * @link https://github.com/4app/Zuniphp
 * @copyright   2010 - 2015 
 * */

namespace App\Lib;

class Session
{


    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }


    public function get($key, $default = '') 
    {
        return (!self::isKey($key))? $default : $_SESSION[$key];
    }




    public function remove($key) 
    {
        if ($this->isKey($key)) 
        {
            unset($_SESSION[$key]);
            return TRUE;
        }

        return FALSE;
    }




    /**
     * @return string with the session id.
     */
    public function getId() 
    {
        return session_id();
    }



    /**
     * return the session array
     * @return array of session indexes
     */
    public function display()
    {
        return $_SESSION;
    }




    //---------------------------------------------------------------
    /**
     * 360 = 6hs
     * @param int $cache_expire_num
     */ 
    public function start($cache_expire_num = '')
    {
        session_start();

        if(is_numeric($cache_expire_num))
        {
            session_cache_expire($cache_expire_num);
        }

        return $this;
    }  

    public function destroy() 
    {

        session_start();
        session_unset();
        session_destroy();

        return $this;

    }





    public function pull($key)
    {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $value;
    }





    //---------------------------------------------------------------
    /**
     * @return bool
     */
    public function isKey($key) 
    {
        return array_key_exists($key, $_SESSION);
    }



    /**
     * @param string $key 
     * @param array $valueValidArr example: array(1,2,3)
     * @return bool
     */
    public function isKeyInArr($key, $valueValidArr) 
    {
        return (in_array(self::get($key), $valueValidArr));
    }

}

// path: Zuni/Session.php 
