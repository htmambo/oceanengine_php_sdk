<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType
{
    public const EXPIRE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType = 'EXPIRE';
    public const MANUAL_OFFLINE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType = 'MANUAL_OFFLINE';
    public const TAG_OFFLINE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType = 'TAG_OFFLINE';

    public const ALLOWED_VALUES = [
        self::EXPIRE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType,
        self::MANUAL_OFFLINE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType,
        self::TAG_OFFLINE_QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType', $value));
        }
        return (string) $value;
    }
}
