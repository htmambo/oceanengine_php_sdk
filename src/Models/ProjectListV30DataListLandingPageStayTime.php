<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListLandingPageStayTime
{
    public const Enum_1000_ProjectListV30DataListLandingPageStayTime = 1000;
    public const Enum_12000_ProjectListV30DataListLandingPageStayTime = 12000;
    public const Enum_20000_ProjectListV30DataListLandingPageStayTime = 20000;
    public const Enum_30000_ProjectListV30DataListLandingPageStayTime = 30000;
    public const Enum_40000_ProjectListV30DataListLandingPageStayTime = 40000;
    public const Enum_5000_ProjectListV30DataListLandingPageStayTime = 5000;
    public const Enum_50000_ProjectListV30DataListLandingPageStayTime = 50000;
    public const Enum_60000_ProjectListV30DataListLandingPageStayTime = 60000;

    public const ALLOWED_VALUES = [
        self::Enum_1000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_12000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_20000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_30000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_40000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_5000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_50000_ProjectListV30DataListLandingPageStayTime,
        self::Enum_60000_ProjectListV30DataListLandingPageStayTime,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListLandingPageStayTime', $value));
        }
        return (string) $value;
    }
}
