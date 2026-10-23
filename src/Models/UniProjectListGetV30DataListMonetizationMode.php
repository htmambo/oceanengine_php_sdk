<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListMonetizationMode
{
    public const IAA_UniProjectListGetV30DataListMonetizationMode = 'IAA';
    public const IAA_AND_IAP_UniProjectListGetV30DataListMonetizationMode = 'IAA_AND_IAP';
    public const IAP_UniProjectListGetV30DataListMonetizationMode = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_UniProjectListGetV30DataListMonetizationMode,
        self::IAA_AND_IAP_UniProjectListGetV30DataListMonetizationMode,
        self::IAP_UniProjectListGetV30DataListMonetizationMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListMonetizationMode', $value));
        }
        return (string) $value;
    }
}
