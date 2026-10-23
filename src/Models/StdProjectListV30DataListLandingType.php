<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListLandingType
{
    public const APP_StdProjectListV30DataListLandingType = 'APP';
    public const DPA_StdProjectListV30DataListLandingType = 'DPA';
    public const LINK_StdProjectListV30DataListLandingType = 'LINK';
    public const MICRO_GAME_StdProjectListV30DataListLandingType = 'MICRO_GAME';
    public const QUICK_APP_StdProjectListV30DataListLandingType = 'QUICK_APP';
    public const SHOP_StdProjectListV30DataListLandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_StdProjectListV30DataListLandingType,
        self::DPA_StdProjectListV30DataListLandingType,
        self::LINK_StdProjectListV30DataListLandingType,
        self::MICRO_GAME_StdProjectListV30DataListLandingType,
        self::QUICK_APP_StdProjectListV30DataListLandingType,
        self::SHOP_StdProjectListV30DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListLandingType', $value));
        }
        return (string) $value;
    }
}
