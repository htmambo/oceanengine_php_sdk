<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringInventoryType
{
    public const INVENTORY_AUTOMOBILE_ProjectListV30FilteringInventoryType = 'INVENTORY_AUTOMOBILE';
    public const INVENTORY_AWEME_FEED_ProjectListV30FilteringInventoryType = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_BEAUTY_ProjectListV30FilteringInventoryType = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ProjectListV30FilteringInventoryType = 'INVENTORY_FACE_U';
    public const INVENTORY_FEED_ProjectListV30FilteringInventoryType = 'INVENTORY_FEED';
    public const INVENTORY_HOMED_AGGREGATE_ProjectListV30FilteringInventoryType = 'INVENTORY_HOMED_AGGREGATE';
    public const INVENTORY_HOTSOON_FEED_ProjectListV30FilteringInventoryType = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_PIPIXIA_ProjectListV30FilteringInventoryType = 'INVENTORY_PIPIXIA';
    public const INVENTORY_SEARCH_ProjectListV30FilteringInventoryType = 'INVENTORY_SEARCH';
    public const INVENTORY_STUDY_ProjectListV30FilteringInventoryType = 'INVENTORY_STUDY';
    public const INVENTORY_TOMATO_NOVEL_ProjectListV30FilteringInventoryType = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_UNION_SLOT_ProjectListV30FilteringInventoryType = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_UNIVERSAL_ProjectListV30FilteringInventoryType = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_VIDEO_FEED_ProjectListV30FilteringInventoryType = 'INVENTORY_VIDEO_FEED';
    public const UNION_BOUTIQUE_GAME_ProjectListV30FilteringInventoryType = 'UNION_BOUTIQUE_GAME';

    public const ALLOWED_VALUES = [
        self::INVENTORY_AUTOMOBILE_ProjectListV30FilteringInventoryType,
        self::INVENTORY_AWEME_FEED_ProjectListV30FilteringInventoryType,
        self::INVENTORY_BEAUTY_ProjectListV30FilteringInventoryType,
        self::INVENTORY_FACE_U_ProjectListV30FilteringInventoryType,
        self::INVENTORY_FEED_ProjectListV30FilteringInventoryType,
        self::INVENTORY_HOMED_AGGREGATE_ProjectListV30FilteringInventoryType,
        self::INVENTORY_HOTSOON_FEED_ProjectListV30FilteringInventoryType,
        self::INVENTORY_PIPIXIA_ProjectListV30FilteringInventoryType,
        self::INVENTORY_SEARCH_ProjectListV30FilteringInventoryType,
        self::INVENTORY_STUDY_ProjectListV30FilteringInventoryType,
        self::INVENTORY_TOMATO_NOVEL_ProjectListV30FilteringInventoryType,
        self::INVENTORY_UNION_SLOT_ProjectListV30FilteringInventoryType,
        self::INVENTORY_UNIVERSAL_ProjectListV30FilteringInventoryType,
        self::INVENTORY_VIDEO_FEED_ProjectListV30FilteringInventoryType,
        self::UNION_BOUTIQUE_GAME_ProjectListV30FilteringInventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringInventoryType', $value));
        }
        return (string) $value;
    }
}
