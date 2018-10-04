<?php

namespace Madepeople\GTM\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 *
 * @package Madepeople\GTM\Model
 */
class Config
{
    const XML_PATH_MODULE_ENABLED = "madepeople_gtm/general/enable";

    const XML_PATH_GTM_CONTAINER_ID = "madepeople_gtm/general/madepeople_gtm_id";

    /**
     * @var ScopeConfigInterface
     */
    private $scope;

    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scope
     */
    public function __construct(ScopeConfigInterface $scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return bool
     */
    public function isModuleEnabled() : bool
    {
        return (bool) $this->scope->getValue(self::XML_PATH_MODULE_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getContainerID() : string
    {
        return (string) $this->scope->getValue(self::XML_PATH_GTM_CONTAINER_ID, ScopeInterface::SCOPE_STORE);
    }
}