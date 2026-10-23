<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdCostProtectStatusGetV2DataListStatus
{
    public const Enum_当前计划还未产生首次send或者不在赔付范围内_AdCostProtectStatusGetV2DataListStatus = '当前计划还未产生首次send或者不在赔付范围内';
    public const Enum_成本保障生效中_AdCostProtectStatusGetV2DataListStatus = '成本保障生效中';
    public const Enum_成本保障已失效_AdCostProtectStatusGetV2DataListStatus = '成本保障已失效';
    public const Enum_成本保障确认中_AdCostProtectStatusGetV2DataListStatus = '成本保障确认中';
    public const Enum_成本保障已到账_AdCostProtectStatusGetV2DataListStatus = '成本保障已到账';
    public const Enum_成本保障已结束_AdCostProtectStatusGetV2DataListStatus = '成本保障已结束';

    public const ALLOWED_VALUES = [
        self::Enum_当前计划还未产生首次send或者不在赔付范围内_AdCostProtectStatusGetV2DataListStatus,
        self::Enum_成本保障生效中_AdCostProtectStatusGetV2DataListStatus,
        self::Enum_成本保障已失效_AdCostProtectStatusGetV2DataListStatus,
        self::Enum_成本保障确认中_AdCostProtectStatusGetV2DataListStatus,
        self::Enum_成本保障已到账_AdCostProtectStatusGetV2DataListStatus,
        self::Enum_成本保障已结束_AdCostProtectStatusGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdCostProtectStatusGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
