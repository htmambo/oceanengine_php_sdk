<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListInventory
{
    public const INVENTORY_HOTSOON_FEED_ReportAdGetV2DataListInventory = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_BEAUTY_ReportAdGetV2DataListInventory = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ReportAdGetV2DataListInventory = 'INVENTORY_FACE_U';
    public const INVENTORY_UNIVERSAL_ReportAdGetV2DataListInventory = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_SEARCH_ReportAdGetV2DataListInventory = 'INVENTORY_SEARCH';
    public const UNION_BOUTIQUE_GAME_ReportAdGetV2DataListInventory = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_VIDEO_FEED_ReportAdGetV2DataListInventory = 'INVENTORY_VIDEO_FEED';
    public const INVENTORY_TOMATO_NOVEL_ReportAdGetV2DataListInventory = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_STUDY_ReportAdGetV2DataListInventory = 'INVENTORY_STUDY';
    public const INVENTORY_PIPIXIA_ReportAdGetV2DataListInventory = 'INVENTORY_PIPIXIA';
    public const INVENTORY_FEED_ReportAdGetV2DataListInventory = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_ReportAdGetV2DataListInventory = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_ReportAdGetV2DataListInventory = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FURNISH_ReportAdGetV2DataListInventory = 'INVENTORY_FURNISH';
    public const INVENTORY_AUTOMOBILE_ReportAdGetV2DataListInventory = 'INVENTORY_AUTOMOBILE';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_ReportAdGetV2DataListInventory,
        self::INVENTORY_BEAUTY_ReportAdGetV2DataListInventory,
        self::INVENTORY_FACE_U_ReportAdGetV2DataListInventory,
        self::INVENTORY_UNIVERSAL_ReportAdGetV2DataListInventory,
        self::INVENTORY_SEARCH_ReportAdGetV2DataListInventory,
        self::UNION_BOUTIQUE_GAME_ReportAdGetV2DataListInventory,
        self::INVENTORY_VIDEO_FEED_ReportAdGetV2DataListInventory,
        self::INVENTORY_TOMATO_NOVEL_ReportAdGetV2DataListInventory,
        self::INVENTORY_STUDY_ReportAdGetV2DataListInventory,
        self::INVENTORY_PIPIXIA_ReportAdGetV2DataListInventory,
        self::INVENTORY_FEED_ReportAdGetV2DataListInventory,
        self::INVENTORY_UNION_SLOT_ReportAdGetV2DataListInventory,
        self::INVENTORY_AWEME_FEED_ReportAdGetV2DataListInventory,
        self::INVENTORY_FURNISH_ReportAdGetV2DataListInventory,
        self::INVENTORY_AUTOMOBILE_ReportAdGetV2DataListInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListInventory', $value));
        }
        return (string) $value;
    }
}
