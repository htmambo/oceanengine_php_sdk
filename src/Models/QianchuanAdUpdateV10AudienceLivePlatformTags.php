<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceLivePlatformTags
{
    public const ABNORMAL_ACTIVE_QianchuanAdUpdateV10AudienceLivePlatformTags = 'ABNORMAL_ACTIVE';
    public const AWEME_FANS_QianchuanAdUpdateV10AudienceLivePlatformTags = 'AWEME_FANS';
    public const LARGE_FANSCOUNT_QianchuanAdUpdateV10AudienceLivePlatformTags = 'LARGE_FANSCOUNT';

    public const ALLOWED_VALUES = [
        self::ABNORMAL_ACTIVE_QianchuanAdUpdateV10AudienceLivePlatformTags,
        self::AWEME_FANS_QianchuanAdUpdateV10AudienceLivePlatformTags,
        self::LARGE_FANSCOUNT_QianchuanAdUpdateV10AudienceLivePlatformTags,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceLivePlatformTags', $value));
        }
        return (string) $value;
    }
}
