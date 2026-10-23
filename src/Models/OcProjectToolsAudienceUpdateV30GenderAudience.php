<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceUpdateV30GenderAudience
{
    public const MALE_OcProjectToolsAudienceUpdateV30GenderAudience = 'MALE';
    public const FEMALE_OcProjectToolsAudienceUpdateV30GenderAudience = 'FEMALE';

    public const ALLOWED_VALUES = [
        self::MALE_OcProjectToolsAudienceUpdateV30GenderAudience,
        self::FEMALE_OcProjectToolsAudienceUpdateV30GenderAudience,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceUpdateV30GenderAudience', $value));
        }
        return (string) $value;
    }
}
