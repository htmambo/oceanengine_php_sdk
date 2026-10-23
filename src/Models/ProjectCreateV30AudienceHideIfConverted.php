<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceHideIfConverted
{
    public const ADVERTISER_ProjectCreateV30AudienceHideIfConverted = 'ADVERTISER';
    public const APP_ProjectCreateV30AudienceHideIfConverted = 'APP';
    public const CUSTOMER_ProjectCreateV30AudienceHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_ProjectCreateV30AudienceHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_ProjectCreateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_ProjectCreateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_ProjectCreateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_ProjectCreateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ProjectCreateV30AudienceHideIfConverted,
        self::APP_ProjectCreateV30AudienceHideIfConverted,
        self::CUSTOMER_ProjectCreateV30AudienceHideIfConverted,
        self::GLOBAL_APP_ProjectCreateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_ProjectCreateV30AudienceHideIfConverted,
        self::ORGANIZATION_ProjectCreateV30AudienceHideIfConverted,
        self::PROJECT_ProjectCreateV30AudienceHideIfConverted,
        self::PROMOTION_ProjectCreateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
