<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceCarrier
{
    public const MOBILE_StdProjectCreateV30AudienceCarrier = 'MOBILE';
    public const TELCOM_StdProjectCreateV30AudienceCarrier = 'TELCOM';
    public const UNICOM_StdProjectCreateV30AudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_StdProjectCreateV30AudienceCarrier,
        self::TELCOM_StdProjectCreateV30AudienceCarrier,
        self::UNICOM_StdProjectCreateV30AudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceCarrier', $value));
        }
        return (string) $value;
    }
}
