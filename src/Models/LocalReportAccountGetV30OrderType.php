<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAccountGetV30OrderType
{
    public const ASC_LocalReportAccountGetV30OrderType = 'ASC';
    public const DESC_LocalReportAccountGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_LocalReportAccountGetV30OrderType,
        self::DESC_LocalReportAccountGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAccountGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
