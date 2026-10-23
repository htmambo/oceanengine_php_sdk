<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus
{
    public const NONVALID_AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus = 'NONVALID';
    public const VALID_AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus = 'VALID';

    public const ALLOWED_VALUES = [
        self::NONVALID_AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus,
        self::VALID_AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus', $value));
        }
        return (string) $value;
    }
}
