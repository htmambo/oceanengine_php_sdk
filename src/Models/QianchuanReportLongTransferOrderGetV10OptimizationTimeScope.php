<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderGetV10OptimizationTimeScope
{
    public const Enum_1_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope = 1;
    public const Enum_15_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope = 15;
    public const Enum_3_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope = 3;
    public const Enum_30_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope = 30;
    public const Enum_7_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope = 7;

    public const ALLOWED_VALUES = [
        self::Enum_1_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope,
        self::Enum_15_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope,
        self::Enum_3_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope,
        self::Enum_30_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope,
        self::Enum_7_QianchuanReportLongTransferOrderGetV10OptimizationTimeScope,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderGetV10OptimizationTimeScope', $value));
        }
        return (string) $value;
    }
}
