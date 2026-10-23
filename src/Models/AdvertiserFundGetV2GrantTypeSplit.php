<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundGetV2GrantTypeSplit
{
    public const OFF_AdvertiserFundGetV2GrantTypeSplit = 'OFF';
    public const ON_AdvertiserFundGetV2GrantTypeSplit = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AdvertiserFundGetV2GrantTypeSplit,
        self::ON_AdvertiserFundGetV2GrantTypeSplit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundGetV2GrantTypeSplit', $value));
        }
        return (string) $value;
    }
}
