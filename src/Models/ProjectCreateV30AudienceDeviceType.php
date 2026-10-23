<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceDeviceType
{
    public const MOBILE_ProjectCreateV30AudienceDeviceType = 'MOBILE';
    public const PAD_ProjectCreateV30AudienceDeviceType = 'PAD';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectCreateV30AudienceDeviceType,
        self::PAD_ProjectCreateV30AudienceDeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceDeviceType', $value));
        }
        return (string) $value;
    }
}
