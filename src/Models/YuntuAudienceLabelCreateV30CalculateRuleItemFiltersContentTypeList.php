<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList
{
    public const Enum_3_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList = 3;
    public const Enum_4_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList = 4;
    public const Enum_5_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList = 5;

    public const ALLOWED_VALUES = [
        self::Enum_3_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList,
        self::Enum_4_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList,
        self::Enum_5_YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum YuntuAudienceLabelCreateV30CalculateRuleItemFiltersContentTypeList', $value));
        }
        return (string) $value;
    }
}
