<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceHideIfConverted
{
    public const ADVERTISER_LocalProjectCreateV30AudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_LocalProjectCreateV30AudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalProjectCreateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalProjectCreateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalProjectCreateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_LocalProjectCreateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalProjectCreateV30AudienceHideIfConverted,
        self::CUSTOMER_LocalProjectCreateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_LocalProjectCreateV30AudienceHideIfConverted,
        self::ORGANIZATION_LocalProjectCreateV30AudienceHideIfConverted,
        self::PROJECT_LocalProjectCreateV30AudienceHideIfConverted,
        self::PROMOTION_LocalProjectCreateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
