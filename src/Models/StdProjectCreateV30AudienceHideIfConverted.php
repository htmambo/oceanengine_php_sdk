<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceHideIfConverted
{
    public const ADVERTISER_StdProjectCreateV30AudienceHideIfConverted = 'ADVERTISER';
    public const APP_StdProjectCreateV30AudienceHideIfConverted = 'APP';
    public const CUSTOMER_StdProjectCreateV30AudienceHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_StdProjectCreateV30AudienceHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_StdProjectCreateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_StdProjectCreateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_StdProjectCreateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_StdProjectCreateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_StdProjectCreateV30AudienceHideIfConverted,
        self::APP_StdProjectCreateV30AudienceHideIfConverted,
        self::CUSTOMER_StdProjectCreateV30AudienceHideIfConverted,
        self::GLOBAL_APP_StdProjectCreateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_StdProjectCreateV30AudienceHideIfConverted,
        self::ORGANIZATION_StdProjectCreateV30AudienceHideIfConverted,
        self::PROJECT_StdProjectCreateV30AudienceHideIfConverted,
        self::PROMOTION_StdProjectCreateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
