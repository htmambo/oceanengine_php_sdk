<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceAc
{
    public const Enum_2_G_ProjectListV30DataListAudienceAc = '2G';
    public const Enum_3_G_ProjectListV30DataListAudienceAc = '3G';
    public const Enum_4_G_ProjectListV30DataListAudienceAc = '4G';
    public const Enum_5_G_ProjectListV30DataListAudienceAc = '5G';
    public const WIFI_ProjectListV30DataListAudienceAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_ProjectListV30DataListAudienceAc,
        self::Enum_3_G_ProjectListV30DataListAudienceAc,
        self::Enum_4_G_ProjectListV30DataListAudienceAc,
        self::Enum_5_G_ProjectListV30DataListAudienceAc,
        self::WIFI_ProjectListV30DataListAudienceAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceAc', $value));
        }
        return (string) $value;
    }
}
