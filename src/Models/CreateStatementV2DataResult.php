<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreateStatementV2DataResult
{
    public const SUCCESS_CreateStatementV2DataResult = 'SUCCESS';
    public const FAILED_CreateStatementV2DataResult = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_CreateStatementV2DataResult,
        self::FAILED_CreateStatementV2DataResult,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreateStatementV2DataResult', $value));
        }
        return (string) $value;
    }
}
