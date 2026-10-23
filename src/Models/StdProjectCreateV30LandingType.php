<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30LandingType
{
    public const APP_StdProjectCreateV30LandingType = 'APP';
    public const DPA_StdProjectCreateV30LandingType = 'DPA';
    public const LINK_StdProjectCreateV30LandingType = 'LINK';
    public const MICRO_GAME_StdProjectCreateV30LandingType = 'MICRO_GAME';
    public const QUICK_APP_StdProjectCreateV30LandingType = 'QUICK_APP';
    public const SHOP_StdProjectCreateV30LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_StdProjectCreateV30LandingType,
        self::DPA_StdProjectCreateV30LandingType,
        self::LINK_StdProjectCreateV30LandingType,
        self::MICRO_GAME_StdProjectCreateV30LandingType,
        self::QUICK_APP_StdProjectCreateV30LandingType,
        self::SHOP_StdProjectCreateV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30LandingType', $value));
        }
        return (string) $value;
    }
}
