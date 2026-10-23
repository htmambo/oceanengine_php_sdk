<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceUpdateV30AudienceType
{
    public const AGE_OcProjectToolsAudienceUpdateV30AudienceType = 'AGE';
    public const DISTRICT_OcProjectToolsAudienceUpdateV30AudienceType = 'DISTRICT';
    public const GENDER_OcProjectToolsAudienceUpdateV30AudienceType = 'GENDER';

    public const ALLOWED_VALUES = [
        self::AGE_OcProjectToolsAudienceUpdateV30AudienceType,
        self::DISTRICT_OcProjectToolsAudienceUpdateV30AudienceType,
        self::GENDER_OcProjectToolsAudienceUpdateV30AudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceUpdateV30AudienceType', $value));
        }
        return (string) $value;
    }
}
