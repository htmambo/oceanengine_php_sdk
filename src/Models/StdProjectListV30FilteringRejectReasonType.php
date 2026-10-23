<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringRejectReasonType
{
    public const NONE_StdProjectListV30FilteringRejectReasonType = 'NONE';
    public const SUGGEST_MODIFYING_StdProjectListV30FilteringRejectReasonType = 'SUGGEST_MODIFYING';
    public const REVIEW_REJECT_StdProjectListV30FilteringRejectReasonType = 'REVIEW_REJECT';

    public const ALLOWED_VALUES = [
        self::NONE_StdProjectListV30FilteringRejectReasonType,
        self::SUGGEST_MODIFYING_StdProjectListV30FilteringRejectReasonType,
        self::REVIEW_REJECT_StdProjectListV30FilteringRejectReasonType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringRejectReasonType', $value));
        }
        return (string) $value;
    }
}
