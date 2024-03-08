<?php
namespace Tech9logy\Tathastu\Plugin\Catalog;

class CustomSort
{

    public function afterGetAttributeUsedForSortByArray(
    \Magento\Catalog\Model\Config $catalogConfig,
    $options
) {

    $options['mostviewd'] = __('Popularity');
    return $options;

 }

}