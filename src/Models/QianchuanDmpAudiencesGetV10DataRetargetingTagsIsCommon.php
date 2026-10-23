<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon
{
    public const Enum_0_QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon = 0;
    public const Enum_1_QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon,
        self::Enum_1_QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon', $value));
        }
        return (string) $value;
    }
}
