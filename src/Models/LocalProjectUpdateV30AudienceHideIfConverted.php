<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceHideIfConverted
{
    public const ADVERTISER_LocalProjectUpdateV30AudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_LocalProjectUpdateV30AudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalProjectUpdateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalProjectUpdateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalProjectUpdateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_LocalProjectUpdateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalProjectUpdateV30AudienceHideIfConverted,
        self::CUSTOMER_LocalProjectUpdateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_LocalProjectUpdateV30AudienceHideIfConverted,
        self::ORGANIZATION_LocalProjectUpdateV30AudienceHideIfConverted,
        self::PROJECT_LocalProjectUpdateV30AudienceHideIfConverted,
        self::PROMOTION_LocalProjectUpdateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
