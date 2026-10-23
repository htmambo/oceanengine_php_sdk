<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomGetV30OrderByType
{
    public const ASC_ReportCustomGetV30OrderByType = 'ASC';
    public const DESC_ReportCustomGetV30OrderByType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ReportCustomGetV30OrderByType,
        self::DESC_ReportCustomGetV30OrderByType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomGetV30OrderByType', $value));
        }
        return (string) $value;
    }
}
