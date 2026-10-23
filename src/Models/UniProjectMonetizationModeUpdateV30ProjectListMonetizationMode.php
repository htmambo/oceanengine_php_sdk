<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode
{
    public const IAA_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode = 'IAA';
    public const IAA_AND_IAP_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode = 'IAA_AND_IAP';
    public const IAP_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode,
        self::IAA_AND_IAP_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode,
        self::IAP_UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectMonetizationModeUpdateV30ProjectListMonetizationMode', $value));
        }
        return (string) $value;
    }
}
