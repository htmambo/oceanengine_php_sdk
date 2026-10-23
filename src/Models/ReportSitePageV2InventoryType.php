<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportSitePageV2InventoryType
{
    public const UNION_SLOT_ReportSitePageV2InventoryType = 'UNION_SLOT';
    public const TOUTIAO_ReportSitePageV2InventoryType = 'TOUTIAO';
    public const WATERMELON_ReportSitePageV2InventoryType = 'WATERMELON';
    public const HOTSOON_ReportSitePageV2InventoryType = 'HOTSOON';
    public const AWEME_ReportSitePageV2InventoryType = 'AWEME';

    public const ALLOWED_VALUES = [
        self::UNION_SLOT_ReportSitePageV2InventoryType,
        self::TOUTIAO_ReportSitePageV2InventoryType,
        self::WATERMELON_ReportSitePageV2InventoryType,
        self::HOTSOON_ReportSitePageV2InventoryType,
        self::AWEME_ReportSitePageV2InventoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportSitePageV2InventoryType', $value));
        }
        return (string) $value;
    }
}
