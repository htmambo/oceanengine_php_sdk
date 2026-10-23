<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class YuntuAudienceLabelCreateV30ValidDay
{
    public const Enum_120_YuntuAudienceLabelCreateV30ValidDay = 120;
    public const Enum_150_YuntuAudienceLabelCreateV30ValidDay = 150;
    public const Enum_180_YuntuAudienceLabelCreateV30ValidDay = 180;
    public const Enum_30_YuntuAudienceLabelCreateV30ValidDay = 30;
    public const Enum_60_YuntuAudienceLabelCreateV30ValidDay = 60;
    public const Enum_90_YuntuAudienceLabelCreateV30ValidDay = 90;

    public const ALLOWED_VALUES = [
        self::Enum_120_YuntuAudienceLabelCreateV30ValidDay,
        self::Enum_150_YuntuAudienceLabelCreateV30ValidDay,
        self::Enum_180_YuntuAudienceLabelCreateV30ValidDay,
        self::Enum_30_YuntuAudienceLabelCreateV30ValidDay,
        self::Enum_60_YuntuAudienceLabelCreateV30ValidDay,
        self::Enum_90_YuntuAudienceLabelCreateV30ValidDay,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum YuntuAudienceLabelCreateV30ValidDay', $value));
        }
        return (string) $value;
    }
}
