<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2District
{
    public const BUSINESS_DISTRICT_AudiencePackageCreateV2District = 'BUSINESS_DISTRICT';
    public const REGION_AudiencePackageCreateV2District = 'REGION';
    public const NONE_AudiencePackageCreateV2District = 'NONE';
    public const OVERSEA_AudiencePackageCreateV2District = 'OVERSEA';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_AudiencePackageCreateV2District,
        self::REGION_AudiencePackageCreateV2District,
        self::NONE_AudiencePackageCreateV2District,
        self::OVERSEA_AudiencePackageCreateV2District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2District', $value));
        }
        return (string) $value;
    }
}
