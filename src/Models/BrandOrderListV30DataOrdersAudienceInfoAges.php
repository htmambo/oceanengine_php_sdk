<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoAges
{
    public const ABOVE50_BrandOrderListV30DataOrdersAudienceInfoAges = 'ABOVE50';
    public const BETWEEN18_23_BrandOrderListV30DataOrdersAudienceInfoAges = 'BETWEEN18_23';
    public const BETWEEN24_30_BrandOrderListV30DataOrdersAudienceInfoAges = 'BETWEEN24_30';
    public const BETWEEN31_40_BrandOrderListV30DataOrdersAudienceInfoAges = 'BETWEEN31_40';
    public const BETWEEN41_49_BrandOrderListV30DataOrdersAudienceInfoAges = 'BETWEEN41_49';

    public const ALLOWED_VALUES = [
        self::ABOVE50_BrandOrderListV30DataOrdersAudienceInfoAges,
        self::BETWEEN18_23_BrandOrderListV30DataOrdersAudienceInfoAges,
        self::BETWEEN24_30_BrandOrderListV30DataOrdersAudienceInfoAges,
        self::BETWEEN31_40_BrandOrderListV30DataOrdersAudienceInfoAges,
        self::BETWEEN41_49_BrandOrderListV30DataOrdersAudienceInfoAges,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoAges', $value));
        }
        return (string) $value;
    }
}
