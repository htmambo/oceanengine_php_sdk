<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceCarrier
{
    public const MOBILE_StdProjectUpdateV30AudienceCarrier = 'MOBILE';
    public const TELCOM_StdProjectUpdateV30AudienceCarrier = 'TELCOM';
    public const UNICOM_StdProjectUpdateV30AudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_StdProjectUpdateV30AudienceCarrier,
        self::TELCOM_StdProjectUpdateV30AudienceCarrier,
        self::UNICOM_StdProjectUpdateV30AudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceCarrier', $value));
        }
        return (string) $value;
    }
}
