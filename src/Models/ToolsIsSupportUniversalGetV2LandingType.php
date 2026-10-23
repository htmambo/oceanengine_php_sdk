<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsIsSupportUniversalGetV2LandingType
{
    public const APP_ToolsIsSupportUniversalGetV2LandingType = 'APP';
    public const ARTICLE_ToolsIsSupportUniversalGetV2LandingType = 'ARTICLE';
    public const AWEME_ToolsIsSupportUniversalGetV2LandingType = 'AWEME';
    public const DPA_ToolsIsSupportUniversalGetV2LandingType = 'DPA';
    public const GOODS_ToolsIsSupportUniversalGetV2LandingType = 'GOODS';
    public const LINK_ToolsIsSupportUniversalGetV2LandingType = 'LINK';
    public const QUICK_APP_ToolsIsSupportUniversalGetV2LandingType = 'QUICK_APP';
    public const SHOP_ToolsIsSupportUniversalGetV2LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_ToolsIsSupportUniversalGetV2LandingType,
        self::ARTICLE_ToolsIsSupportUniversalGetV2LandingType,
        self::AWEME_ToolsIsSupportUniversalGetV2LandingType,
        self::DPA_ToolsIsSupportUniversalGetV2LandingType,
        self::GOODS_ToolsIsSupportUniversalGetV2LandingType,
        self::LINK_ToolsIsSupportUniversalGetV2LandingType,
        self::QUICK_APP_ToolsIsSupportUniversalGetV2LandingType,
        self::SHOP_ToolsIsSupportUniversalGetV2LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsIsSupportUniversalGetV2LandingType', $value));
        }
        return (string) $value;
    }
}
