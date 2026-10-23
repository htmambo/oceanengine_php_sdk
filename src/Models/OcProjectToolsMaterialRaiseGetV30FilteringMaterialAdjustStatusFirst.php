<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst
{
    public const ADJUSTING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'ADJUSTING';
    public const ALL_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'ALL';
    public const ALL_INCLUDE_DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'ALL_INCLUDE_DELETED';
    public const DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'DELETED';
    public const FINISH_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'FINISH';
    public const TERMINAL_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::ALL_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::ALL_INCLUDE_DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::FINISH_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::TERMINAL_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
        self::UNADJUSTED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusFirst', $value));
        }
        return (string) $value;
    }
}
