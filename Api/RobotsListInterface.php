<?php
/**
 * Copyright (c) 2021-2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsApi\Api;

interface RobotsListInterface
{
    // Deprecated constants (kept for backward compatibility and migration)
    /** @deprecated Use directive arrays instead */
    public const NOINDEX_NOFOLLOW = 1;
    /** @deprecated Use directive arrays instead */
    public const NOINDEX_FOLLOW = 2;
    /** @deprecated Use directive arrays instead */
    public const INDEX_NOFOLLOW = 3;
    /** @deprecated Use directive arrays instead */
    public const INDEX_FOLLOW = 4;
    /** @deprecated Use directive arrays instead */
    public const NOINDEX_NOFOLLOW_NOARCHIVE = 5;
    /** @deprecated Use directive arrays instead */
    public const NOINDEX_FOLLOW_NOARCHIVE = 6;
    /** @deprecated Use directive arrays instead */
    public const INDEX_NOFOLLOW_NOARCHIVE = 7;
    /** @deprecated Use directive arrays instead */
    public const INDEX_FOLLOW_NOARCHIVE = 8;

    // New directive constants
    public const DIRECTIVE_INDEX = 'index';
    public const DIRECTIVE_NOINDEX = 'noindex';
    public const DIRECTIVE_FOLLOW = 'follow';
    public const DIRECTIVE_NOFOLLOW = 'nofollow';
    public const DIRECTIVE_NOARCHIVE = 'noarchive';
    public const DIRECTIVE_NOSNIPPET = 'nosnippet';
    public const DIRECTIVE_NOTRANSLATE = 'notranslate';
    public const DIRECTIVE_NOIMAGEINDEX = 'noimageindex';
    public const DIRECTIVE_NONE = 'none';
    public const DIRECTIVE_ALL = 'all';

    // Advanced directives (use with values)
    public const DIRECTIVE_MAX_SNIPPET = 'max-snippet';
    public const DIRECTIVE_MAX_IMAGE_PREVIEW = 'max-image-preview';
    public const DIRECTIVE_MAX_VIDEO_PREVIEW = 'max-video-preview';
    public const DIRECTIVE_UNAVAILABLE_AFTER = 'unavailable_after';

    /**
     * Get meta robots string by code (deprecated)
     *
     * @deprecated Use buildMetaRobotsFromDirectives() instead
     * @param int $code
     * @return string
     */
    public function getMetaRobotsByCode(int $code): string;

    /**
     * Build robots meta tag string from directive array
     *
     * @param array $directives Array of directives (e.g., ['noindex', 'nofollow', 'max-snippet:100'])
     * @return string Formatted robots string (e.g., 'NOINDEX,NOFOLLOW,MAX-SNIPPET:100')
     */
    public function buildMetaRobotsFromDirectives(array $directives): string;

    /**
     * Get all available basic directives (without values)
     *
     * @return array List of basic directive names
     */
    public function getBasicDirectives(): array;

    /**
     * Get all available advanced directives (with values)
     *
     * @return array List of advanced directive names
     */
    public function getAdvancedDirectives(): array;

    /**
     * Validate directive array for conflicts and format
     *
     * @param array $directives Array of directives to validate
     * @return array ['valid' => bool, 'errors' => string[]]
     */
    public function validateDirectives(array $directives): array;
}
