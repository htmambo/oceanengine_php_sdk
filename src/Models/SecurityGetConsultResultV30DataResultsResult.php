<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityGetConsultResultV30DataResultsResult
{
    public const CONSULTING_SecurityGetConsultResultV30DataResultsResult = 'CONSULTING';
    public const PASS_SecurityGetConsultResultV30DataResultsResult = 'PASS';
    public const REJECT_SecurityGetConsultResultV30DataResultsResult = 'REJECT';

    public const ALLOWED_VALUES = [
        self::CONSULTING_SecurityGetConsultResultV30DataResultsResult,
        self::PASS_SecurityGetConsultResultV30DataResultsResult,
        self::REJECT_SecurityGetConsultResultV30DataResultsResult,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityGetConsultResultV30DataResultsResult', $value));
        }
        return (string) $value;
    }
}
