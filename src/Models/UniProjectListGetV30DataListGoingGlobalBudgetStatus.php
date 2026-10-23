<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListGoingGlobalBudgetStatus
{
    public const TRUE_UniProjectListGetV30DataListGoingGlobalBudgetStatus = 'TRUE';
    public const FALSE_UniProjectListGetV30DataListGoingGlobalBudgetStatus = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_UniProjectListGetV30DataListGoingGlobalBudgetStatus,
        self::FALSE_UniProjectListGetV30DataListGoingGlobalBudgetStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListGoingGlobalBudgetStatus', $value));
        }
        return (string) $value;
    }
}
