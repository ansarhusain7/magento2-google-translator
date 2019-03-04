<?php
/**
 * Ansar Husain
 * Google Translator
 */
namespace Google\Translator\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Layout
 * @package Google\Translator\Model\Config\Source
 */
class Layout implements  ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'verticle', 'label' => __('Verticle')],
            ['value' => 'horizontal', 'label' => __('Horizontal')]
        ];
    }

}