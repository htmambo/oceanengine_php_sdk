<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceHideIfConverted
{
    public const ADVERTISER_LocalProjectDetailV30DataAudienceHideIfConverted = 'ADVERTISER';
    public const APP_LocalProjectDetailV30DataAudienceHideIfConverted = 'APP';
    public const CUSTOMER_LocalProjectDetailV30DataAudienceHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalProjectDetailV30DataAudienceHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalProjectDetailV30DataAudienceHideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalProjectDetailV30DataAudienceHideIfConverted = 'PROJECT';
    public const PROMOTION_LocalProjectDetailV30DataAudienceHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::APP_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::CUSTOMER_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::NO_EXCLUDE_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::ORGANIZATION_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::PROJECT_LocalProjectDetailV30DataAudienceHideIfConverted,
        self::PROMOTION_LocalProjectDetailV30DataAudienceHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceHideIfConverted', $value));
        }
        return (string) $value;
    }
}
