<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceCreateV30AudienceType
{
    public const AGE_OcProjectToolsAudienceCreateV30AudienceType = 'AGE';
    public const DISTRICT_OcProjectToolsAudienceCreateV30AudienceType = 'DISTRICT';
    public const GENDER_OcProjectToolsAudienceCreateV30AudienceType = 'GENDER';

    public const ALLOWED_VALUES = [
        self::AGE_OcProjectToolsAudienceCreateV30AudienceType,
        self::DISTRICT_OcProjectToolsAudienceCreateV30AudienceType,
        self::GENDER_OcProjectToolsAudienceCreateV30AudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceCreateV30AudienceType', $value));
        }
        return (string) $value;
    }
}
