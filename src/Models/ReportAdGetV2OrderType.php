<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2OrderType
{
    public const DESC_ReportAdGetV2OrderType = 'DESC';
    public const ASC_ReportAdGetV2OrderType = 'ASC';

    public const ALLOWED_VALUES = [
        self::DESC_ReportAdGetV2OrderType,
        self::ASC_ReportAdGetV2OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2OrderType', $value));
        }
        return (string) $value;
    }
}
