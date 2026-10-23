<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliveryRangeInventoryType
{
    public const INVENTORY_AWEME_FEED_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FEED_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_FEED';
    public const INVENTORY_HOMED_AGGREGATE_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_HOMED_AGGREGATE';
    public const INVENTORY_HOTSOON_FEED_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_SEARCH_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_SEARCH';
    public const INVENTORY_TOMATO_NOVEL_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_UNION_SLOT_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_VIDEO_FEED_ProjectCreateV30DeliveryRangeInventoryType = 'INVENTORY_VIDEO_FEED';
    public const UNION_BOUTIQUE_GAME_ProjectCreateV30DeliveryRangeInventoryType = 'UNION_BOUTIQUE_GAME';

    public const ALLOWED_VALUES = [
        self::INVENTORY_AWEME_FEED_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_FEED_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_HOMED_AGGREGATE_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_HOTSOON_FEED_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_SEARCH_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_TOMATO_NOVEL_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_UNION_SLOT_ProjectCreateV30DeliveryRangeInventoryType,
        self::INVENTORY_VIDEO_FEED_ProjectCreateV30DeliveryRangeInventoryType,
        self::UNION_BOUTIQUE_GAME_ProjectCreateV30DeliveryRangeInventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliveryRangeInventoryType', $value));
        }
        return (string) $value;
    }
}
