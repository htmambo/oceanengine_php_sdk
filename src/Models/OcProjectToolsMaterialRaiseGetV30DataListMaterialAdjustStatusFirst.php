<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst
{
    public const ADJUSTING_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst = 'ADJUSTING';
    public const DELETED_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst = 'DELETED';
    public const FINISH_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst = 'FINISH';
    public const TERMINAL_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst,
        self::DELETED_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst,
        self::FINISH_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst,
        self::TERMINAL_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst,
        self::UNADJUSTED_OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseGetV30DataListMaterialAdjustStatusFirst', $value));
        }
        return (string) $value;
    }
}
