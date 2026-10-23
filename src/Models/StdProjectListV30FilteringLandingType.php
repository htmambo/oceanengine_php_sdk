<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringLandingType
{
    public const APP_StdProjectListV30FilteringLandingType = 'APP';
    public const DPA_StdProjectListV30FilteringLandingType = 'DPA';
    public const LINK_StdProjectListV30FilteringLandingType = 'LINK';
    public const MICRO_GAME_StdProjectListV30FilteringLandingType = 'MICRO_GAME';
    public const QUICK_APP_StdProjectListV30FilteringLandingType = 'QUICK_APP';
    public const SHOP_StdProjectListV30FilteringLandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_StdProjectListV30FilteringLandingType,
        self::DPA_StdProjectListV30FilteringLandingType,
        self::LINK_StdProjectListV30FilteringLandingType,
        self::MICRO_GAME_StdProjectListV30FilteringLandingType,
        self::QUICK_APP_StdProjectListV30FilteringLandingType,
        self::SHOP_StdProjectListV30FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
