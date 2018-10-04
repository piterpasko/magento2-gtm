<?php

namespace Madepeople\GTM\Block;

use Madepeople\GTM\Model\Config;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class GTM
 *
 * @package Madepeople\GTM\Block
 */
class GTM extends Template
{
    /**
     * @var Config
     */
    private $config;

    /**
     * GTM constructor.
     *
     * @param Config  $config
     * @param Context $context
     * @param array   $data
     */
    public function __construct(
        Config $config,
        Context $context,
        array $data = []
    )
    {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getContainerID() : string
    {
        return $this->config->getContainerID();
    }

    /**
     * @return bool
     */
    public function isValidToEnable() : bool
    {
        return ($this->config->isModuleEnabled() && '' !== $this->getContainerID());
    }
}