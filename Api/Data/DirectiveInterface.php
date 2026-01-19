<?php
/**
 * Copyright (c) 2021-2026. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoRobotsApi\Api\Data;

/**
 * Interface for structured robot directive
 *
 * Represents a single robots directive with optional bot targeting and modification value
 * Format: bot:value:modification (e.g., "googlebot:max-snippet:50")
 */
interface DirectiveInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_BOT = 'bot';
    public const KEY_MODIFICATION = 'modification';

    /**
     * Get the directive value (e.g., 'noindex', 'max-snippet')
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Set the directive value
     *
     * @param string $value
     * @return $this
     */
    public function setValue(string $value): self;

    /**
     * Get the bot name (e.g., 'googlebot', 'bingbot')
     * Empty string means applies to all bots
     *
     * @return string
     */
    public function getBot(): string;

    /**
     * Set the bot name
     *
     * @param string $bot
     * @return $this
     */
    public function setBot(string $bot): self;

    /**
     * Get the modification/suffix value (e.g., '50' for max-snippet:50)
     *
     * @return string
     */
    public function getModification(): string;

    /**
     * Set the modification value
     *
     * @param string $modification
     * @return $this
     */
    public function setModification(string $modification): self;

    /**
     * Convert to string representation
     * Format: bot:value:modification (empty parts are omitted)
     *
     * @return string
     */
    public function toString(): string;

    /**
     * Convert to array representation
     *
     * @return array{value: string, bot: string, modification: string}
     */
    public function toArray(): array;

    /**
     * Create from array
     *
     * @param array $data
     * @return $this
     */
    public function fromArray(array $data): self;
}
