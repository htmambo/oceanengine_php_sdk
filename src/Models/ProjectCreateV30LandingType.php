<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30LandingType
{
    public const APP_ProjectCreateV30LandingType = 'APP';
    public const DPA_ProjectCreateV30LandingType = 'DPA';
    public const LINK_ProjectCreateV30LandingType = 'LINK';
    public const MICRO_GAME_ProjectCreateV30LandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_ProjectCreateV30LandingType = 'NATIVE_ACTION';
    public const QUICK_APP_ProjectCreateV30LandingType = 'QUICK_APP';
    public const SHOP_ProjectCreateV30LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_ProjectCreateV30LandingType,
        self::DPA_ProjectCreateV30LandingType,
        self::LINK_ProjectCreateV30LandingType,
        self::MICRO_GAME_ProjectCreateV30LandingType,
        self::NATIVE_ACTION_ProjectCreateV30LandingType,
        self::QUICK_APP_ProjectCreateV30LandingType,
        self::SHOP_ProjectCreateV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30LandingType', $value));
        }
        return (string) $value;
    }
}
