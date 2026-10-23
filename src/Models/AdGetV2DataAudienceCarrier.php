<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceCarrier
{
    public const UNICOM_AdGetV2DataAudienceCarrier = 'UNICOM';
    public const TELCOM_AdGetV2DataAudienceCarrier = 'TELCOM';
    public const MOBILE_AdGetV2DataAudienceCarrier = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::UNICOM_AdGetV2DataAudienceCarrier,
        self::TELCOM_AdGetV2DataAudienceCarrier,
        self::MOBILE_AdGetV2DataAudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceCarrier', $value));
        }
        return (string) $value;
    }
}
