<?php
 
namespace Tech9logy\Tathastu\Block;
 
use Magento\Framework\View\Element\Template;

 
class Header extends Template
{
 
 
    public function __construct(
        Template\Context $context,
        
    ) {
        parent::__construct($context);
       // echo'<pre>';print_r("test");exit;

    }
       public function getText()
        {
            return "Header!";
        }

}