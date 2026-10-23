<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2District
{
    public const BUSINESS_DISTRICT_AudiencePackageUpdateV2District = 'BUSINESS_DISTRICT';
    public const REGION_AudiencePackageUpdateV2District = 'REGION';
    public const NONE_AudiencePackageUpdateV2District = 'NONE';
    public const OVERSEA_AudiencePackageUpdateV2District = 'OVERSEA';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_AudiencePackageUpdateV2District,
        self::REGION_AudiencePackageUpdateV2District,
        self::NONE_AudiencePackageUpdateV2District,
        self::OVERSEA_AudiencePackageUpdateV2District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2District', $value));
        }
        return (string) $value;
    }
}
