<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataHideIfConverted
{
    public const APP_AdGetV2DataHideIfConverted = 'APP';
    public const ADVERTISER_AdGetV2DataHideIfConverted = 'ADVERTISER';
    public const CAMPAIGN_AdGetV2DataHideIfConverted = 'CAMPAIGN';
    public const ORGANIZATION_AdGetV2DataHideIfConverted = 'ORGANIZATION';
    public const NO_EXCLUDE_AdGetV2DataHideIfConverted = 'NO_EXCLUDE';
    public const AD_AdGetV2DataHideIfConverted = 'AD';
    public const CUSTOMER_AdGetV2DataHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_AdGetV2DataHideIfConverted = 'GLOBAL_APP';

    public const ALLOWED_VALUES = [
        self::APP_AdGetV2DataHideIfConverted,
        self::ADVERTISER_AdGetV2DataHideIfConverted,
        self::CAMPAIGN_AdGetV2DataHideIfConverted,
        self::ORGANIZATION_AdGetV2DataHideIfConverted,
        self::NO_EXCLUDE_AdGetV2DataHideIfConverted,
        self::AD_AdGetV2DataHideIfConverted,
        self::CUSTOMER_AdGetV2DataHideIfConverted,
        self::GLOBAL_APP_AdGetV2DataHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataHideIfConverted', $value));
        }
        return (string) $value;
    }
}
