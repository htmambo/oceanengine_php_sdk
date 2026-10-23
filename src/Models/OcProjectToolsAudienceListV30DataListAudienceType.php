<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListAudienceType
{
    public const AGE_OcProjectToolsAudienceListV30DataListAudienceType = 'AGE';
    public const DISTRICT_OcProjectToolsAudienceListV30DataListAudienceType = 'DISTRICT';
    public const GENDER_OcProjectToolsAudienceListV30DataListAudienceType = 'GENDER';

    public const ALLOWED_VALUES = [
        self::AGE_OcProjectToolsAudienceListV30DataListAudienceType,
        self::DISTRICT_OcProjectToolsAudienceListV30DataListAudienceType,
        self::GENDER_OcProjectToolsAudienceListV30DataListAudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListAudienceType', $value));
        }
        return (string) $value;
    }
}
