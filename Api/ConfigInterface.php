<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsApi\Api;

use Magento\Store\Model\ScopeInterface;

interface ConfigInterface
{
    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isEnabled($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): bool;

    /**
     * @param null $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getMetaRobots($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): array;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return int
     */
    public function getHttpsMetaRobots($scopeCode = null, string $scopeType = ScopeInterface::SCOPE_STORE): int;

    /**
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isNoindexNofollowForNoRouteIndex(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * Check if X-Robots-Tag header is enabled
     * 
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isRobotsXheaderEnabled(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;
}
