<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2Carrier
{
    public const UNICOM_AudiencePackageCreateV2Carrier = 'UNICOM';
    public const TELCOM_AudiencePackageCreateV2Carrier = 'TELCOM';
    public const MOBILE_AudiencePackageCreateV2Carrier = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::UNICOM_AudiencePackageCreateV2Carrier,
        self::TELCOM_AudiencePackageCreateV2Carrier,
        self::MOBILE_AudiencePackageCreateV2Carrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2Carrier', $value));
        }
        return (string) $value;
    }
}
