<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundDailyStatV2AccountType
{
    public const AD_AdvertiserFundDailyStatV2AccountType = 'AD';
    public const LOCAL_AdvertiserFundDailyStatV2AccountType = 'LOCAL';
    public const STAR_AdvertiserFundDailyStatV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_AdvertiserFundDailyStatV2AccountType,
        self::LOCAL_AdvertiserFundDailyStatV2AccountType,
        self::STAR_AdvertiserFundDailyStatV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundDailyStatV2AccountType', $value));
        }
        return (string) $value;
    }
}
