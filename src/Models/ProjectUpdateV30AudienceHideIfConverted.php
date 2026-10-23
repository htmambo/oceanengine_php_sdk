<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceHideIfConverted
{
    public const ADVERTISER_ProjectUpdateV30AudienceHideIfConverted = 'ADVERTISER';
    public const APP_ProjectUpdateV30AudienceHideIfConverted = 'APP';
    public const CUSTOMER_ProjectUpdateV30AudienceHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_ProjectUpdateV30AudienceHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_ProjectUpdateV30AudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_ProjectUpdateV30AudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_ProjectUpdateV30AudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_ProjectUpdateV30AudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ProjectUpdateV30AudienceHideIfConverted,
        self::APP_ProjectUpdateV30AudienceHideIfConverted,
        self::CUSTOMER_ProjectUpdateV30AudienceHideIfConverted,
        self::GLOBAL_APP_ProjectUpdateV30AudienceHideIfConverted,
        self::NO_EXCLUDE_ProjectUpdateV30AudienceHideIfConverted,
        self::ORGANIZATION_ProjectUpdateV30AudienceHideIfConverted,
        self::PROJECT_ProjectUpdateV30AudienceHideIfConverted,
        self::PROMOTION_ProjectUpdateV30AudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
