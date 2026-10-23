<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceCarrier
{
    public const MOBILE_ProjectCreateV30AudienceCarrier = 'MOBILE';
    public const TELCOM_ProjectCreateV30AudienceCarrier = 'TELCOM';
    public const UNICOM_ProjectCreateV30AudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectCreateV30AudienceCarrier,
        self::TELCOM_ProjectCreateV30AudienceCarrier,
        self::UNICOM_ProjectCreateV30AudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceCarrier', $value));
        }
        return (string) $value;
    }
}
