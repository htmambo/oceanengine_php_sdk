<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2Carrier
{
    public const UNICOM_AudiencePackageUpdateV2Carrier = 'UNICOM';
    public const TELCOM_AudiencePackageUpdateV2Carrier = 'TELCOM';
    public const MOBILE_AudiencePackageUpdateV2Carrier = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::UNICOM_AudiencePackageUpdateV2Carrier,
        self::TELCOM_AudiencePackageUpdateV2Carrier,
        self::MOBILE_AudiencePackageUpdateV2Carrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2Carrier', $value));
        }
        return (string) $value;
    }
}
