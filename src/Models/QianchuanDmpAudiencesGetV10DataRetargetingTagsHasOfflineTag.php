<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag
{
    public const Enum_0_QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag = 0;
    public const Enum_1_QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag,
        self::Enum_1_QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag', $value));
        }
        return (string) $value;
    }
}
