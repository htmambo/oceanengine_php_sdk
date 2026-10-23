<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceCreateV30GenderAudience
{
    public const MALE_OcProjectToolsAudienceCreateV30GenderAudience = 'MALE';
    public const FEMALE_OcProjectToolsAudienceCreateV30GenderAudience = 'FEMALE';

    public const ALLOWED_VALUES = [
        self::MALE_OcProjectToolsAudienceCreateV30GenderAudience,
        self::FEMALE_OcProjectToolsAudienceCreateV30GenderAudience,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceCreateV30GenderAudience', $value));
        }
        return (string) $value;
    }
}
