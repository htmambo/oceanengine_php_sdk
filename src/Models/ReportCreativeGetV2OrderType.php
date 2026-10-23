<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2OrderType
{
    public const DESC_ReportCreativeGetV2OrderType = 'DESC';
    public const ASC_ReportCreativeGetV2OrderType = 'ASC';

    public const ALLOWED_VALUES = [
        self::DESC_ReportCreativeGetV2OrderType,
        self::ASC_ReportCreativeGetV2OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2OrderType', $value));
        }
        return (string) $value;
    }
}
