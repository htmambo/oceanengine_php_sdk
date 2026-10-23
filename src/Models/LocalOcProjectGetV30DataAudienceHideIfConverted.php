<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataAudienceHideIfConverted
{
    public const ADVERTISER_LocalOcProjectGetV30DataAudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_LocalOcProjectGetV30DataAudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalOcProjectGetV30DataAudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalOcProjectGetV30DataAudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalOcProjectGetV30DataAudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_LocalOcProjectGetV30DataAudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalOcProjectGetV30DataAudienceHideIfConverted,
        self::CUSTOMER_LocalOcProjectGetV30DataAudienceHideIfConverted,
        self::NO_EXCLUDE_LocalOcProjectGetV30DataAudienceHideIfConverted,
        self::ORGANIZATION_LocalOcProjectGetV30DataAudienceHideIfConverted,
        self::PROJECT_LocalOcProjectGetV30DataAudienceHideIfConverted,
        self::PROMOTION_LocalOcProjectGetV30DataAudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataAudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
