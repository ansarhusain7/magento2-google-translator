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
class Country implements  ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'af', 'label' => __('Afrikaans')],
            ['value' => 'sq', 'label' => __('Albanian')],
            ['value' => 'ar', 'label' => __('Arabic')],
            ['value' => 'az', 'label' => __('Azerbaijani')],
            ['value' => 'eu', 'label' => __('Basque')],
            ['value' => 'bn', 'label' => __('Bengali')],
            ['value' => 'be', 'label' => __('Belarusian')],
            ['value' => 'bg', 'label' => __('Bulgarian')],
            ['value' => 'ca', 'label' => __('Catalan')],
            ['value' => 'zh-CN', 'label' => __('Chinese Simplified')],
            ['value' => 'zh-TW', 'label' => __('Chinese Traditional')],
            ['value' => 'hr', 'label' => __('Croatian')],
            ['value' => 'cs', 'label' => __('Czech')],
            ['value' => 'da', 'label' => __('Danish')],
            ['value' => 'nl', 'label' => __('Dutch')],
            ['value' => 'en', 'label' => __('English')],
            ['value' => 'eo', 'label' => __('Esperanto')],
            ['value' => 'et', 'label' => __('Estonian')],
            ['value' => 'tl', 'label' => __('Filipino')],
            ['value' => 'fi', 'label' => __('Finnish')],
            ['value' => 'fr', 'label' => __('French')],
            ['value' => 'gl', 'label' => __('Galician')],
            ['value' => 'ka', 'label' => __('Georgian')],
            ['value' => 'de', 'label' => __('German')],
            ['value' => 'el', 'label' => __('Greek')],
            ['value' => 'gu', 'label' => __('Gujarati')],
            ['value' => 'ht', 'label' => __('Haitian Creole')],
            ['value' => 'iw', 'label' => __('Hebrew')],
            ['value' => 'hi', 'label' => __('Hindi')],
            ['value' => 'hu', 'label' => __('Hungarian')],
            ['value' => 'is', 'label' => __('Icelandic')],
            ['value' => 'id', 'label' => __('Indonesian')],
            ['value' => 'ga', 'label' => __('Irish')],
            ['value' => 'it', 'label' => __('Italian')],
            ['value' => 'ja', 'label' => __('Japanese')],
            ['value' => 'kn', 'label' => __('Kannada')],
            ['value' => 'ko', 'label' => __('Korean')],
            ['value' => 'la', 'label' => __('Latin')],
            ['value' => 'lv', 'label' => __('Latvian')],
            ['value' => 'lt', 'label' => __('Lithuanian')],
            ['value' => 'mk', 'label' => __('Macedonian')],
            ['value' => 'ms', 'label' => __('Malay')],
            ['value' => 'mt', 'label' => __('Maltese')],
            ['value' => 'no', 'label' => __('Norwegian')],
            ['value' => 'fa', 'label' => __('Persian')],
            ['value' => 'pl', 'label' => __('Polish')],
            ['value' => 'pt', 'label' => __('Portuguese')],
            ['value' => 'ro', 'label' => __('Romanian')],
            ['value' => 'ru', 'label' => __('Russian')],
            ['value' => 'sr', 'label' => __('Serbian')],
            ['value' => 'sk', 'label' => __('Slovak')],
            ['value' => 'sl', 'label' => __('Slovenian')],
            ['value' => 'es', 'label' => __('Spanish')],
            ['value' => 'sw', 'label' => __('Swahili')],
            ['value' => 'sv', 'label' => __('Swedish')],
            ['value' => 'ta', 'label' => __('Tamil')],
            ['value' => 'te', 'label' => __('Telugu')],
            ['value' => 'th', 'label' => __('Thai')],
            ['value' => 'tr', 'label' => __('Turkish')],
            ['value' => 'uk', 'label' => __('Ukrainian')],
            ['value' => 'ur', 'label' => __('Urdu')],
            ['value' => 'vi', 'label' => __('Vietnamese')],
            ['value' => 'cy', 'label' => __('Welsh')],
            ['value' => 'yi', 'label' => __('Yiddish')]

        ];
    }

}