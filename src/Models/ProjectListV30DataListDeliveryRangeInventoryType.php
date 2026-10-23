<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryRangeInventoryType
{
    public const INVENTORY_AUTOMOBILE_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_AUTOMOBILE';
    public const INVENTORY_AWEME_FEED_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_BEAUTY_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_FACE_U';
    public const INVENTORY_FEED_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_FEED';
    public const INVENTORY_HOMED_AGGREGATE_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_HOMED_AGGREGATE';
    public const INVENTORY_HOTSOON_FEED_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_PIPIXIA_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_PIPIXIA';
    public const INVENTORY_SEARCH_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_SEARCH';
    public const INVENTORY_STUDY_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_STUDY';
    public const INVENTORY_TOMATO_NOVEL_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_UNION_SLOT_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_UNIVERSAL_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_VIDEO_FEED_ProjectListV30DataListDeliveryRangeInventoryType = 'INVENTORY_VIDEO_FEED';
    public const UNION_BOUTIQUE_GAME_ProjectListV30DataListDeliveryRangeInventoryType = 'UNION_BOUTIQUE_GAME';

    public const ALLOWED_VALUES = [
        self::INVENTORY_AUTOMOBILE_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_AWEME_FEED_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_BEAUTY_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_FACE_U_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_FEED_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_HOMED_AGGREGATE_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_HOTSOON_FEED_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_PIPIXIA_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_SEARCH_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_STUDY_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_TOMATO_NOVEL_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_UNION_SLOT_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_UNIVERSAL_ProjectListV30DataListDeliveryRangeInventoryType,
        self::INVENTORY_VIDEO_FEED_ProjectListV30DataListDeliveryRangeInventoryType,
        self::UNION_BOUTIQUE_GAME_ProjectListV30DataListDeliveryRangeInventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryRangeInventoryType', $value));
        }
        return (string) $value;
    }
}
