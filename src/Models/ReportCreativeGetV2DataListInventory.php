<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2DataListInventory
{
    public const INVENTORY_HOTSOON_FEED_ReportCreativeGetV2DataListInventory = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_BEAUTY_ReportCreativeGetV2DataListInventory = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ReportCreativeGetV2DataListInventory = 'INVENTORY_FACE_U';
    public const INVENTORY_UNIVERSAL_ReportCreativeGetV2DataListInventory = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_SEARCH_ReportCreativeGetV2DataListInventory = 'INVENTORY_SEARCH';
    public const UNION_BOUTIQUE_GAME_ReportCreativeGetV2DataListInventory = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_VIDEO_FEED_ReportCreativeGetV2DataListInventory = 'INVENTORY_VIDEO_FEED';
    public const INVENTORY_TOMATO_NOVEL_ReportCreativeGetV2DataListInventory = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_STUDY_ReportCreativeGetV2DataListInventory = 'INVENTORY_STUDY';
    public const INVENTORY_PIPIXIA_ReportCreativeGetV2DataListInventory = 'INVENTORY_PIPIXIA';
    public const INVENTORY_FEED_ReportCreativeGetV2DataListInventory = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_ReportCreativeGetV2DataListInventory = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_ReportCreativeGetV2DataListInventory = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FURNISH_ReportCreativeGetV2DataListInventory = 'INVENTORY_FURNISH';
    public const INVENTORY_AUTOMOBILE_ReportCreativeGetV2DataListInventory = 'INVENTORY_AUTOMOBILE';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_BEAUTY_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_FACE_U_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_UNIVERSAL_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_SEARCH_ReportCreativeGetV2DataListInventory,
        self::UNION_BOUTIQUE_GAME_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_VIDEO_FEED_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_TOMATO_NOVEL_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_STUDY_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_PIPIXIA_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_FEED_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_UNION_SLOT_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_AWEME_FEED_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_FURNISH_ReportCreativeGetV2DataListInventory,
        self::INVENTORY_AUTOMOBILE_ReportCreativeGetV2DataListInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2DataListInventory', $value));
        }
        return (string) $value;
    }
}
