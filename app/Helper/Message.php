<?php 

namespace App\Helper;

use Senun\Widget\Create\Element;
use Senun\Widget\Create\AttrArr;
use Senun\Widget\Create\InnerStr;
use Senun\Widget\Create\InnerObj;



class Message
{

    public static function success($message)
    {
        $alert = 'alert_primary';

        return self::flash(
            $alert, $message
        ) ;
    } 


    public static function error($message)
    {
        $alert = 'alert_secondary';

        return self::flash(
            $alert, $message
        ) ;
    } 
    


    public static function flash($alert, $message)
    {
        $container = new Element('div') ;
        $container->setAttr( new AttrArr(array(
            'class' => 'alert ' . $alert
        )));

        $container->setInner( new InnerStr($message));

        return $container->getElement();
    } 

    
}    


