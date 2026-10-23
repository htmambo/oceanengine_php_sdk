<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductStatusBatchUpdateV30AccountType
{
    public const ADV_DpaEbpProductStatusBatchUpdateV30AccountType = 'ADV';
    public const EBP_DpaEbpProductStatusBatchUpdateV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::ADV_DpaEbpProductStatusBatchUpdateV30AccountType,
        self::EBP_DpaEbpProductStatusBatchUpdateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductStatusBatchUpdateV30AccountType', $value));
        }
        return (string) $value;
    }
}
