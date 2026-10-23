<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond
{
    public const ALL_MATERIALS_DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'ALL_MATERIALS_DELETED';
    public const LIVE_ROOM_NOT_STARTED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'LIVE_ROOM_NOT_STARTED';
    public const MATERIAL_ADJUST_AUDITING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'MATERIAL_ADJUST_AUDITING';
    public const MATERIAL_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'MATERIAL_ADJUST_NEW_CREATED_AUDITING';
    public const REACHED_REGULATION_BUDGET_UPPER_LIMIT_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'REACHED_REGULATION_BUDGET_UPPER_LIMIT';
    public const TASK_REACHED_REGULATION_DURATION_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond = 'TASK_REACHED_REGULATION_DURATION';

    public const ALLOWED_VALUES = [
        self::ALL_MATERIALS_DELETED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
        self::LIVE_ROOM_NOT_STARTED_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
        self::MATERIAL_ADJUST_AUDITING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
        self::MATERIAL_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
        self::REACHED_REGULATION_BUDGET_UPPER_LIMIT_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
        self::TASK_REACHED_REGULATION_DURATION_OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseGetV30FilteringMaterialAdjustStatusSecond', $value));
        }
        return (string) $value;
    }
}
