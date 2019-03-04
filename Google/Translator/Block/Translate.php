<?php
/**
 * Ansar Husain
 * Google Translator
 */

namespace Google\Translator\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
/**
 * Class Translate
 * @package Google\Translator\Block
 */
class Translate extends Template
{

    /**
     * @var ScopeConfigInterface
     */
    protected  $_scopeConfig;

    /**
     * Translate constructor.
     * @param Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
     )
    {
        $this->_scopeConfig = $scopeConfig;

        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function isEnable()
    {
        return (bool)$this->_scopeConfig->getValue('translator/general/enable', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getCountry(){

        return $this->_scopeConfig->getValue('translator/general/country', ScopeInterface::SCOPE_STORE);

    }

}