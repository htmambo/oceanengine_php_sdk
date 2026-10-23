<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30LandingPageStayTime
{
    public const Enum_1000_ProjectCreateV30LandingPageStayTime = 1000;
    public const Enum_12000_ProjectCreateV30LandingPageStayTime = 12000;
    public const Enum_20000_ProjectCreateV30LandingPageStayTime = 20000;
    public const Enum_30000_ProjectCreateV30LandingPageStayTime = 30000;
    public const Enum_40000_ProjectCreateV30LandingPageStayTime = 40000;
    public const Enum_5000_ProjectCreateV30LandingPageStayTime = 5000;
    public const Enum_50000_ProjectCreateV30LandingPageStayTime = 50000;
    public const Enum_60000_ProjectCreateV30LandingPageStayTime = 60000;

    public const ALLOWED_VALUES = [
        self::Enum_1000_ProjectCreateV30LandingPageStayTime,
        self::Enum_12000_ProjectCreateV30LandingPageStayTime,
        self::Enum_20000_ProjectCreateV30LandingPageStayTime,
        self::Enum_30000_ProjectCreateV30LandingPageStayTime,
        self::Enum_40000_ProjectCreateV30LandingPageStayTime,
        self::Enum_5000_ProjectCreateV30LandingPageStayTime,
        self::Enum_50000_ProjectCreateV30LandingPageStayTime,
        self::Enum_60000_ProjectCreateV30LandingPageStayTime,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30LandingPageStayTime', $value));
        }
        return (string) $value;
    }
}
