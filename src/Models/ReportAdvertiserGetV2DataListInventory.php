<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListInventory
{
    public const INVENTORY_HOTSOON_FEED_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_BEAUTY_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_FACE_U';
    public const INVENTORY_UNIVERSAL_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_SEARCH_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_SEARCH';
    public const UNION_BOUTIQUE_GAME_ReportAdvertiserGetV2DataListInventory = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_VIDEO_FEED_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_VIDEO_FEED';
    public const INVENTORY_TOMATO_NOVEL_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_STUDY_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_STUDY';
    public const INVENTORY_PIPIXIA_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_PIPIXIA';
    public const INVENTORY_FEED_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FURNISH_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_FURNISH';
    public const INVENTORY_AUTOMOBILE_ReportAdvertiserGetV2DataListInventory = 'INVENTORY_AUTOMOBILE';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_BEAUTY_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_FACE_U_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_UNIVERSAL_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_SEARCH_ReportAdvertiserGetV2DataListInventory,
        self::UNION_BOUTIQUE_GAME_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_VIDEO_FEED_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_TOMATO_NOVEL_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_STUDY_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_PIPIXIA_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_FEED_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_UNION_SLOT_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_AWEME_FEED_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_FURNISH_ReportAdvertiserGetV2DataListInventory,
        self::INVENTORY_AUTOMOBILE_ReportAdvertiserGetV2DataListInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListInventory', $value));
        }
        return (string) $value;
    }
}
