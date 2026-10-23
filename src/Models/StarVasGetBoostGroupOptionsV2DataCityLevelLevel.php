<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataCityLevelLevel
{
    public const FIFTH_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'FIFTH';
    public const FIRST_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'FIRST';
    public const FORTH_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'FORTH';
    public const NEW_FIRST_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'NEW_FIRST';
    public const SECOND_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'SECOND';
    public const SPECIAL_ADMIN_REGION_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'SPECIAL_ADMIN_REGION';
    public const THIRD_StarVasGetBoostGroupOptionsV2DataCityLevelLevel = 'THIRD';

    public const ALLOWED_VALUES = [
        self::FIFTH_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::FIRST_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::FORTH_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::NEW_FIRST_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::SECOND_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::SPECIAL_ADMIN_REGION_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
        self::THIRD_StarVasGetBoostGroupOptionsV2DataCityLevelLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataCityLevelLevel', $value));
        }
        return (string) $value;
    }
}
