<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30OrderField
{
    public const CONVERSION_COST_LocalFileVideoGetV30OrderField = 'CONVERSION_COST';
    public const CONVERSION_RATE_LocalFileVideoGetV30OrderField = 'CONVERSION_RATE';
    public const CREATE_TIME_LocalFileVideoGetV30OrderField = 'CREATE_TIME';
    public const CTR_LocalFileVideoGetV30OrderField = 'CTR';
    public const DURATION_LocalFileVideoGetV30OrderField = 'DURATION';
    public const STAT_COST_LocalFileVideoGetV30OrderField = 'STAT_COST';

    public const ALLOWED_VALUES = [
        self::CONVERSION_COST_LocalFileVideoGetV30OrderField,
        self::CONVERSION_RATE_LocalFileVideoGetV30OrderField,
        self::CREATE_TIME_LocalFileVideoGetV30OrderField,
        self::CTR_LocalFileVideoGetV30OrderField,
        self::DURATION_LocalFileVideoGetV30OrderField,
        self::STAT_COST_LocalFileVideoGetV30OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30OrderField', $value));
        }
        return (string) $value;
    }
}
