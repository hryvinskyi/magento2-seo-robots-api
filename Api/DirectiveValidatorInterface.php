<?php
/**
 * Copyright (c) 2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsApi\Api;

interface DirectiveValidatorInterface
{
    /**
     * Validate single directive with optional value
     *
     * @param string $directive Single directive (e.g., 'noindex' or 'max-snippet:100')
     * @return bool
     */
    public function isValid(string $directive): bool;

    /**
     * Check for conflicting directives in array
     *
     * @param array $directives Array of directives to check
     * @return array Array of conflicting directive pairs
     */
    public function findConflicts(array $directives): array;

    /**
     * Validate directive value format
     *
     * @param string $directiveName Directive name (e.g., 'max-snippet')
     * @param string $value Directive value (e.g., '100')
     * @return bool
     */
    public function isValidValue(string $directiveName, string $value): bool;
}
