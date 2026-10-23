<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30MonetizationMode
{
    public const IAA_UniProjectUpdateV30MonetizationMode = 'IAA';
    public const IAA_AND_IAP_UniProjectUpdateV30MonetizationMode = 'IAA_AND_IAP';
    public const IAP_UniProjectUpdateV30MonetizationMode = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_UniProjectUpdateV30MonetizationMode,
        self::IAA_AND_IAP_UniProjectUpdateV30MonetizationMode,
        self::IAP_UniProjectUpdateV30MonetizationMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30MonetizationMode', $value));
        }
        return (string) $value;
    }
}
