<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalConsultAwameListGetV30DataConsultAwemeListAuthType
{
    public const OFFICIAL_LocalConsultAwameListGetV30DataConsultAwemeListAuthType = 'OFFICIAL';
    public const SELF_LocalConsultAwameListGetV30DataConsultAwemeListAuthType = 'SELF';

    public const ALLOWED_VALUES = [
        self::OFFICIAL_LocalConsultAwameListGetV30DataConsultAwemeListAuthType,
        self::SELF_LocalConsultAwameListGetV30DataConsultAwemeListAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalConsultAwameListGetV30DataConsultAwemeListAuthType', $value));
        }
        return (string) $value;
    }
}
