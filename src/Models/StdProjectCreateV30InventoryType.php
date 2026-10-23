<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30InventoryType
{
    public const INVENTORY_AWEME_FEED_StdProjectCreateV30InventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FEED_StdProjectCreateV30InventoryType = 'INVENTORY_FEED';
    public const INVENTORY_SEARCH_StdProjectCreateV30InventoryType = 'INVENTORY_SEARCH';
    public const INVENTORY_TOMATO_NOVEL_StdProjectCreateV30InventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_UNION_SLOT_StdProjectCreateV30InventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_VIDEO_FEED_StdProjectCreateV30InventoryType = 'INVENTORY_VIDEO_FEED';

    public const ALLOWED_VALUES = [
        self::INVENTORY_AWEME_FEED_StdProjectCreateV30InventoryType,
        self::INVENTORY_FEED_StdProjectCreateV30InventoryType,
        self::INVENTORY_SEARCH_StdProjectCreateV30InventoryType,
        self::INVENTORY_TOMATO_NOVEL_StdProjectCreateV30InventoryType,
        self::INVENTORY_UNION_SLOT_StdProjectCreateV30InventoryType,
        self::INVENTORY_VIDEO_FEED_StdProjectCreateV30InventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30InventoryType', $value));
        }
        return (string) $value;
    }
}
