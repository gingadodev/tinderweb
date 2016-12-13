<?php 

namespace App\Helper;

use Senun\Widget\Create\Element;
use Senun\Widget\Create\Attr;
use Senun\Widget\Create\InnerStr;



class Icon
{


    public static function fa($icon)
    {
        $fa = 'fa fa-' . $icon;

        $i = new Element('i') ;
        $i->setAttr(  new Attr('class', $fa));
        $i->setAttr(  new Attr('aria-hidden', 'true'));
        $i->setInner( new InnerStr(''));

        return $i->getElement();
    } 

    
}    


