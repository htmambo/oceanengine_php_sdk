<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceLivePlatformTags
{
    public const ABNORMAL_ACTIVE_QianchuanAdCreateV10AudienceLivePlatformTags = 'ABNORMAL_ACTIVE';
    public const AWEME_FANS_QianchuanAdCreateV10AudienceLivePlatformTags = 'AWEME_FANS';
    public const LARGE_FANSCOUNT_QianchuanAdCreateV10AudienceLivePlatformTags = 'LARGE_FANSCOUNT';

    public const ALLOWED_VALUES = [
        self::ABNORMAL_ACTIVE_QianchuanAdCreateV10AudienceLivePlatformTags,
        self::AWEME_FANS_QianchuanAdCreateV10AudienceLivePlatformTags,
        self::LARGE_FANSCOUNT_QianchuanAdCreateV10AudienceLivePlatformTags,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceLivePlatformTags', $value));
        }
        return (string) $value;
    }
}
