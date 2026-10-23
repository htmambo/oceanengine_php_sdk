<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListInventoryType
{
    public const INVENTORY_AUTOMOBILE_StdProjectListV30DataListInventoryType = 'INVENTORY_AUTOMOBILE';
    public const INVENTORY_AWEME_FEED_StdProjectListV30DataListInventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_BEAUTY_StdProjectListV30DataListInventoryType = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_StdProjectListV30DataListInventoryType = 'INVENTORY_FACE_U';
    public const INVENTORY_FEED_StdProjectListV30DataListInventoryType = 'INVENTORY_FEED';
    public const INVENTORY_HOMED_AGGREGATE_StdProjectListV30DataListInventoryType = 'INVENTORY_HOMED_AGGREGATE';
    public const INVENTORY_HOTSOON_FEED_StdProjectListV30DataListInventoryType = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_PIPIXIA_StdProjectListV30DataListInventoryType = 'INVENTORY_PIPIXIA';
    public const INVENTORY_SEARCH_StdProjectListV30DataListInventoryType = 'INVENTORY_SEARCH';
    public const INVENTORY_STUDY_StdProjectListV30DataListInventoryType = 'INVENTORY_STUDY';
    public const INVENTORY_TOMATO_NOVEL_StdProjectListV30DataListInventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_UNION_SLOT_StdProjectListV30DataListInventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_UNIVERSAL_StdProjectListV30DataListInventoryType = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_VIDEO_FEED_StdProjectListV30DataListInventoryType = 'INVENTORY_VIDEO_FEED';
    public const UNION_BOUTIQUE_GAME_StdProjectListV30DataListInventoryType = 'UNION_BOUTIQUE_GAME';

    public const ALLOWED_VALUES = [
        self::INVENTORY_AUTOMOBILE_StdProjectListV30DataListInventoryType,
        self::INVENTORY_AWEME_FEED_StdProjectListV30DataListInventoryType,
        self::INVENTORY_BEAUTY_StdProjectListV30DataListInventoryType,
        self::INVENTORY_FACE_U_StdProjectListV30DataListInventoryType,
        self::INVENTORY_FEED_StdProjectListV30DataListInventoryType,
        self::INVENTORY_HOMED_AGGREGATE_StdProjectListV30DataListInventoryType,
        self::INVENTORY_HOTSOON_FEED_StdProjectListV30DataListInventoryType,
        self::INVENTORY_PIPIXIA_StdProjectListV30DataListInventoryType,
        self::INVENTORY_SEARCH_StdProjectListV30DataListInventoryType,
        self::INVENTORY_STUDY_StdProjectListV30DataListInventoryType,
        self::INVENTORY_TOMATO_NOVEL_StdProjectListV30DataListInventoryType,
        self::INVENTORY_UNION_SLOT_StdProjectListV30DataListInventoryType,
        self::INVENTORY_UNIVERSAL_StdProjectListV30DataListInventoryType,
        self::INVENTORY_VIDEO_FEED_StdProjectListV30DataListInventoryType,
        self::UNION_BOUTIQUE_GAME_StdProjectListV30DataListInventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListInventoryType', $value));
        }
        return (string) $value;
    }
}
