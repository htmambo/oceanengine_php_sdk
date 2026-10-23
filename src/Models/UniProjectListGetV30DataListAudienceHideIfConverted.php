<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudienceHideIfConverted
{
    public const ADVERTISER_UniProjectListGetV30DataListAudienceHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_UniProjectListGetV30DataListAudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_UniProjectListGetV30DataListAudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_UniProjectListGetV30DataListAudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_UniProjectListGetV30DataListAudienceHideIfConverted = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_UniProjectListGetV30DataListAudienceHideIfConverted,
        self::CUSTOMER_UniProjectListGetV30DataListAudienceHideIfConverted,
        self::NO_EXCLUDE_UniProjectListGetV30DataListAudienceHideIfConverted,
        self::ORGANIZATION_UniProjectListGetV30DataListAudienceHideIfConverted,
        self::PROJECT_UniProjectListGetV30DataListAudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
