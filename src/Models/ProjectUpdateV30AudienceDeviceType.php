<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceDeviceType
{
    public const MOBILE_ProjectUpdateV30AudienceDeviceType = 'MOBILE';
    public const PAD_ProjectUpdateV30AudienceDeviceType = 'PAD';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectUpdateV30AudienceDeviceType,
        self::PAD_ProjectUpdateV30AudienceDeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceDeviceType', $value));
        }
        return (string) $value;
    }
}
