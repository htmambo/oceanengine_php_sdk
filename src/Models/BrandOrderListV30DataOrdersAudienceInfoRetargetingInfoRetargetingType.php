<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType
{
    public const ECOMMERCE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType = 'ECOMMERCE';
    public const EXCLUDE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType = 'EXCLUDE';
    public const INCLUDE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType = 'INCLUDE';
    public const SEARCH_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType = 'SEARCH';
    public const UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ECOMMERCE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType,
        self::EXCLUDE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType,
        self::INCLUDE_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType,
        self::SEARCH_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType,
        self::UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType', $value));
        }
        return (string) $value;
    }
}
