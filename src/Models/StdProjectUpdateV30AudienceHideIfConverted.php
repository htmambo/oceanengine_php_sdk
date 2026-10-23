<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceHideIfConverted
{
    public const ADVERTISER_StdProjectUpdateV30AudienceHideIfConverted = 'ADVERTISER';
    public const APP_StdProjectUpdateV30AudienceHideIfConverted = 'APP';
    public const CUSTOMER_StdProjectUpdateV30AudienceHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_StdProjectUpdateV30AudienceHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_StdProjectUpdateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_StdProjectUpdateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_StdProjectUpdateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_StdProjectUpdateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_StdProjectUpdateV30AudienceHideIfConverted,
        self::APP_StdProjectUpdateV30AudienceHideIfConverted,
        self::CUSTOMER_StdProjectUpdateV30AudienceHideIfConverted,
        self::GLOBAL_APP_StdProjectUpdateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_StdProjectUpdateV30AudienceHideIfConverted,
        self::ORGANIZATION_StdProjectUpdateV30AudienceHideIfConverted,
        self::PROJECT_StdProjectUpdateV30AudienceHideIfConverted,
        self::PROMOTION_StdProjectUpdateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
