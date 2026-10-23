<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAudienceListGetV10DataAudiencesListAudienceSource
{
    public const Enum_0_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 0;
    public const Enum_1_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 1;
    public const Enum_2_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 2;
    public const Enum_3_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 3;
    public const Enum_4_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 4;
    public const Enum_5_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 5;
    public const Enum_6_QianchuanAudienceListGetV10DataAudiencesListAudienceSource = 6;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_1_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_2_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_3_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_4_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_5_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
        self::Enum_6_QianchuanAudienceListGetV10DataAudiencesListAudienceSource,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAudienceListGetV10DataAudiencesListAudienceSource', $value));
        }
        return (string) $value;
    }
}
