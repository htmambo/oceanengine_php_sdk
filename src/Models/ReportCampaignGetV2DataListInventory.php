<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2DataListInventory
{
    public const INVENTORY_HOTSOON_FEED_ReportCampaignGetV2DataListInventory = 'INVENTORY_HOTSOON_FEED';
    public const INVENTORY_BEAUTY_ReportCampaignGetV2DataListInventory = 'INVENTORY_BEAUTY';
    public const INVENTORY_FACE_U_ReportCampaignGetV2DataListInventory = 'INVENTORY_FACE_U';
    public const INVENTORY_UNIVERSAL_ReportCampaignGetV2DataListInventory = 'INVENTORY_UNIVERSAL';
    public const INVENTORY_SEARCH_ReportCampaignGetV2DataListInventory = 'INVENTORY_SEARCH';
    public const UNION_BOUTIQUE_GAME_ReportCampaignGetV2DataListInventory = 'UNION_BOUTIQUE_GAME';
    public const INVENTORY_VIDEO_FEED_ReportCampaignGetV2DataListInventory = 'INVENTORY_VIDEO_FEED';
    public const INVENTORY_TOMATO_NOVEL_ReportCampaignGetV2DataListInventory = 'INVENTORY_TOMATO_NOVEL';
    public const INVENTORY_STUDY_ReportCampaignGetV2DataListInventory = 'INVENTORY_STUDY';
    public const INVENTORY_PIPIXIA_ReportCampaignGetV2DataListInventory = 'INVENTORY_PIPIXIA';
    public const INVENTORY_FEED_ReportCampaignGetV2DataListInventory = 'INVENTORY_FEED';
    public const INVENTORY_UNION_SLOT_ReportCampaignGetV2DataListInventory = 'INVENTORY_UNION_SLOT';
    public const INVENTORY_AWEME_FEED_ReportCampaignGetV2DataListInventory = 'INVENTORY_AWEME_FEED';
    public const INVENTORY_FURNISH_ReportCampaignGetV2DataListInventory = 'INVENTORY_FURNISH';
    public const INVENTORY_AUTOMOBILE_ReportCampaignGetV2DataListInventory = 'INVENTORY_AUTOMOBILE';

    public const ALLOWED_VALUES = [
        self::INVENTORY_HOTSOON_FEED_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_BEAUTY_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_FACE_U_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_UNIVERSAL_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_SEARCH_ReportCampaignGetV2DataListInventory,
        self::UNION_BOUTIQUE_GAME_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_VIDEO_FEED_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_TOMATO_NOVEL_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_STUDY_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_PIPIXIA_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_FEED_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_UNION_SLOT_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_AWEME_FEED_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_FURNISH_ReportCampaignGetV2DataListInventory,
        self::INVENTORY_AUTOMOBILE_ReportCampaignGetV2DataListInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2DataListInventory', $value));
        }
        return (string) $value;
    }
}
