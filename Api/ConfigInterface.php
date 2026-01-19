<?php
/**
 * Copyright (c) 2021-2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
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
     * @return array
     */
    public function getNoRouteRobotsTypes(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;

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

    /**
     * Check if paginated robots is enabled
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isPaginatedRobots(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * Get paginated robots meta directives
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getPaginatedMetaRobots(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;

    /**
     * Get independent X-Robots-Tag rules
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getXRobotsRules(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;

    /**
     * Get HTTPS X-Robots-Tag directives
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getHttpsXRobotsDirectives(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;

    /**
     * Get X-Robots-Tag directives for 404 pages
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getNoRouteXRobotsTypes(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;

    /**
     * Check if X-Robots-Tag for paginated content is enabled
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return bool
     */
    public function isXRobotsPaginatedEnabled(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): bool;

    /**
     * Get X-Robots-Tag directives for paginated content
     *
     * @param mixed $scopeCode
     * @param string $scopeType
     *
     * @return array
     */
    public function getPaginatedXRobots(
        $scopeCode = null,
        string $scopeType = ScopeInterface::SCOPE_STORE
    ): array;
}
