<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceCarrier
{
    public const MOBILE_ProjectUpdateV30AudienceCarrier = 'MOBILE';
    public const TELCOM_ProjectUpdateV30AudienceCarrier = 'TELCOM';
    public const UNICOM_ProjectUpdateV30AudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectUpdateV30AudienceCarrier,
        self::TELCOM_ProjectUpdateV30AudienceCarrier,
        self::UNICOM_ProjectUpdateV30AudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceCarrier', $value));
        }
        return (string) $value;
    }
}
