<?php

namespace Tech9logy\Tathastu\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //Your code to run when event is fired.
        return 'Event fired';
    }
}
