<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataInventoryType
{
    public const INVENTORY_HOTSOON_FEED_AdGetV2DataInventoryType = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_ESSAY_FEED_AdGetV2DataInventoryType = 'INVENTORY_ESSAY_FEED';
    public const INVENTORY_AWEME_SEARCH_AdGetV2DataInventoryType = 'INVENTORY_AWEME_SEARCH';
    public const INVENTORY_UNION_SPLASH_SLOT_AdGetV2DataInventoryType = 'INVENTORY_UNION_SPLASH_SLOT';
    public const INVENTORY_VIDEO_FEED_AdGetV2DataInventoryType = 'INVENTORY_VIDEO_FEED';
    public const UNION_BOUTIQUE_GAME_AdGetV2DataInventoryType = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_TEXT_LINK_AdGetV2DataInventoryType = 'INVENTORY_TEXT_LINK';
    public const INVENTORY_TOMATO_NOVEL_AdGetV2DataInventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_FEED_AdGetV2DataInventoryType = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_AdGetV2DataInventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_AdGetV2DataInventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_SEARCH_AdGetV2DataInventoryType = 'INVENTORY_SEARCH';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_AdGetV2DataInventoryType,
        self::INVENTORY_ESSAY_FEED_AdGetV2DataInventoryType,
        self::INVENTORY_AWEME_SEARCH_AdGetV2DataInventoryType,
        self::INVENTORY_UNION_SPLASH_SLOT_AdGetV2DataInventoryType,
        self::INVENTORY_VIDEO_FEED_AdGetV2DataInventoryType,
        self::UNION_BOUTIQUE_GAME_AdGetV2DataInventoryType,
        self::INVENTORY_TEXT_LINK_AdGetV2DataInventoryType,
        self::INVENTORY_TOMATO_NOVEL_AdGetV2DataInventoryType,
        self::INVENTORY_FEED_AdGetV2DataInventoryType,
        self::INVENTORY_UNION_SLOT_AdGetV2DataInventoryType,
        self::INVENTORY_AWEME_FEED_AdGetV2DataInventoryType,
        self::INVENTORY_SEARCH_AdGetV2DataInventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataInventoryType', $value));
        }
        return (string) $value;
    }
}
