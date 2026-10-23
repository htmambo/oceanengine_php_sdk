<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductDeleteV30AccountType
{
    public const ADV_DpaEbpProductDeleteV30AccountType = 'ADV';
    public const EBP_DpaEbpProductDeleteV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::ADV_DpaEbpProductDeleteV30AccountType,
        self::EBP_DpaEbpProductDeleteV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductDeleteV30AccountType', $value));
        }
        return (string) $value;
    }
}
