<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringInventoryTypes
{
    public const INVENTORY_HOTSOON_FEED_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_BEAUTY_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_FACE_U';
    public const INVENTORY_UNIVERSAL_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_SEARCH_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_SEARCH';
    public const UNION_BOUTIQUE_GAME_ReportCreativeGetV2FilteringInventoryTypes = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_VIDEO_FEED_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_VIDEO_FEED';
    public const INVENTORY_TOMATO_NOVEL_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_STUDY_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_STUDY';
    public const INVENTORY_PIPIXIA_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_PIPIXIA';
    public const INVENTORY_FEED_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FURNISH_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_FURNISH';
    public const INVENTORY_AUTOMOBILE_ReportCreativeGetV2FilteringInventoryTypes = 'INVENTORY_AUTOMOBILE';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_BEAUTY_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_FACE_U_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_UNIVERSAL_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_SEARCH_ReportCreativeGetV2FilteringInventoryTypes,
        self::UNION_BOUTIQUE_GAME_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_VIDEO_FEED_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_TOMATO_NOVEL_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_STUDY_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_PIPIXIA_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_FEED_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_UNION_SLOT_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_AWEME_FEED_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_FURNISH_ReportCreativeGetV2FilteringInventoryTypes,
        self::INVENTORY_AUTOMOBILE_ReportCreativeGetV2FilteringInventoryTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringInventoryTypes', $value));
        }
        return (string) $value;
    }
}
