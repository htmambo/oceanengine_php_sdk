<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackagePromotionReportV30FilterLandingType
{
    public const APP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'APP';
    public const DPA_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'DPA';
    public const LINK_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'LINK';
    public const MICRO_GAME_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'MICRO_GAME';
    public const QUICK_APP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'QUICK_APP';
    public const SHOP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
        self::DPA_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
        self::LINK_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
        self::MICRO_GAME_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
        self::QUICK_APP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
        self::SHOP_ToolsUnionFlowPackagePromotionReportV30FilterLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackagePromotionReportV30FilterLandingType', $value));
        }
        return (string) $value;
    }
}
