<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudienceHideIfConverted
{
    public const ADVERTISER_UniProjectCreateV30AudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_UniProjectCreateV30AudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_UniProjectCreateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_UniProjectCreateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_UniProjectCreateV30AudienceHideIfConverted = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_UniProjectCreateV30AudienceHideIfConverted,
        self::CUSTOMER_UniProjectCreateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_UniProjectCreateV30AudienceHideIfConverted,
        self::ORGANIZATION_UniProjectCreateV30AudienceHideIfConverted,
        self::PROJECT_UniProjectCreateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
