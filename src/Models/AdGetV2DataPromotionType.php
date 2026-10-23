<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataPromotionType
{
    public const LIVE_AdGetV2DataPromotionType = 'LIVE';
    public const AWEME_HOME_PAGE_AdGetV2DataPromotionType = 'AWEME_HOME_PAGE';
    public const LANDING_PAGE_LINK_AdGetV2DataPromotionType = 'LANDING_PAGE_LINK';
    public const GOODS_AdGetV2DataPromotionType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_AdGetV2DataPromotionType,
        self::AWEME_HOME_PAGE_AdGetV2DataPromotionType,
        self::LANDING_PAGE_LINK_AdGetV2DataPromotionType,
        self::GOODS_AdGetV2DataPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataPromotionType', $value));
        }
        return (string) $value;
    }
}
