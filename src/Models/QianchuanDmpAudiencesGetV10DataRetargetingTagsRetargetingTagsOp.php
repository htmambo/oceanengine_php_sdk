<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp
{
    public const ALL_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp = 'ALL';
    public const EXCLUDE_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp = 'EXCLUDE';
    public const INCLUDE_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp = 'INCLUDE';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp,
        self::EXCLUDE_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp,
        self::INCLUDE_QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp', $value));
        }
        return (string) $value;
    }
}
