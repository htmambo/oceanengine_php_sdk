<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceHideIfConverted
{
    public const ADVERTISER_ProjectListV30DataListAudienceHideIfConverted = 'ADVERTISER';
    public const APP_ProjectListV30DataListAudienceHideIfConverted = 'APP';
    public const CUSTOMER_ProjectListV30DataListAudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_ProjectListV30DataListAudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_ProjectListV30DataListAudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_ProjectListV30DataListAudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_ProjectListV30DataListAudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ProjectListV30DataListAudienceHideIfConverted,
        self::APP_ProjectListV30DataListAudienceHideIfConverted,
        self::CUSTOMER_ProjectListV30DataListAudienceHideIfConverted,
        self::NO_EXCLUDE_ProjectListV30DataListAudienceHideIfConverted,
        self::ORGANIZATION_ProjectListV30DataListAudienceHideIfConverted,
        self::PROJECT_ProjectListV30DataListAudienceHideIfConverted,
        self::PROMOTION_ProjectListV30DataListAudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
