<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalConsultAwameListGetV30FilteringAuthType
{
    public const OFFICIAL_LocalConsultAwameListGetV30FilteringAuthType = 'OFFICIAL';
    public const SELF_LocalConsultAwameListGetV30FilteringAuthType = 'SELF';

    public const ALLOWED_VALUES = [
        self::OFFICIAL_LocalConsultAwameListGetV30FilteringAuthType,
        self::SELF_LocalConsultAwameListGetV30FilteringAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalConsultAwameListGetV30FilteringAuthType', $value));
        }
        return (string) $value;
    }
}
