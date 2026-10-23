<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30AudienceHideIfConverted
{
    public const ADVERTISER_UniProjectUpdateV30AudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_UniProjectUpdateV30AudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_UniProjectUpdateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_UniProjectUpdateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_UniProjectUpdateV30AudienceHideIfConverted = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_UniProjectUpdateV30AudienceHideIfConverted,
        self::CUSTOMER_UniProjectUpdateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_UniProjectUpdateV30AudienceHideIfConverted,
        self::ORGANIZATION_UniProjectUpdateV30AudienceHideIfConverted,
        self::PROJECT_UniProjectUpdateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
