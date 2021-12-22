<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsApi\Api;

interface RobotsListInterface
{
    public const NOINDEX_NOFOLLOW = 1;
    public const NOINDEX_FOLLOW = 2;
    public const INDEX_NOFOLLOW = 3;
    public const INDEX_FOLLOW = 4;

    /**
     * @param int $code
     *
     * @return string
     */
    public function getMetaRobotsByCode(int $code): string;
}
