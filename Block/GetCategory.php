<?php
namespace Tech9logy\Tathastu\Block;

use Magento\Framework\View\Element\Template;

class GetCategory extends Template
{

    protected $_registry;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
    )
    {
        $this->_registry = $registry;
        parent::__construct($context);
    }

    public function getCurrentCategory()
    {
        return $this->_registry->registry('current_category');
    }
}