<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductDeleteV30AccountType
{
    public const ADV_DpaEbpClueProductDeleteV30AccountType = 'ADV';
    public const EBP_DpaEbpClueProductDeleteV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::ADV_DpaEbpClueProductDeleteV30AccountType,
        self::EBP_DpaEbpClueProductDeleteV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductDeleteV30AccountType', $value));
        }
        return (string) $value;
    }
}
