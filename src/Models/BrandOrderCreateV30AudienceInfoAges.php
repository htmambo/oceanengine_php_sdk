<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoAges
{
    public const ABOVE50_BrandOrderCreateV30AudienceInfoAges = 'ABOVE50';
    public const BETWEEN18_23_BrandOrderCreateV30AudienceInfoAges = 'BETWEEN18_23';
    public const BETWEEN24_30_BrandOrderCreateV30AudienceInfoAges = 'BETWEEN24_30';
    public const BETWEEN31_40_BrandOrderCreateV30AudienceInfoAges = 'BETWEEN31_40';
    public const BETWEEN41_49_BrandOrderCreateV30AudienceInfoAges = 'BETWEEN41_49';
    public const UNLIMITED_BrandOrderCreateV30AudienceInfoAges = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ABOVE50_BrandOrderCreateV30AudienceInfoAges,
        self::BETWEEN18_23_BrandOrderCreateV30AudienceInfoAges,
        self::BETWEEN24_30_BrandOrderCreateV30AudienceInfoAges,
        self::BETWEEN31_40_BrandOrderCreateV30AudienceInfoAges,
        self::BETWEEN41_49_BrandOrderCreateV30AudienceInfoAges,
        self::UNLIMITED_BrandOrderCreateV30AudienceInfoAges,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoAges', $value));
        }
        return (string) $value;
    }
}
