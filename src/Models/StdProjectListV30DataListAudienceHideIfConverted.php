<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceHideIfConverted
{
    public const ADVERTISER_StdProjectListV30DataListAudienceHideIfConverted = 'ADVERTISER';
    public const APP_StdProjectListV30DataListAudienceHideIfConverted = 'APP';
    public const CUSTOMER_StdProjectListV30DataListAudienceHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_StdProjectListV30DataListAudienceHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_StdProjectListV30DataListAudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_StdProjectListV30DataListAudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_StdProjectListV30DataListAudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_StdProjectListV30DataListAudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_StdProjectListV30DataListAudienceHideIfConverted,
        self::APP_StdProjectListV30DataListAudienceHideIfConverted,
        self::CUSTOMER_StdProjectListV30DataListAudienceHideIfConverted,
        self::GLOBAL_APP_StdProjectListV30DataListAudienceHideIfConverted,
        self::NO_EXCLUDE_StdProjectListV30DataListAudienceHideIfConverted,
        self::ORGANIZATION_StdProjectListV30DataListAudienceHideIfConverted,
        self::PROJECT_StdProjectListV30DataListAudienceHideIfConverted,
        self::PROMOTION_StdProjectListV30DataListAudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
