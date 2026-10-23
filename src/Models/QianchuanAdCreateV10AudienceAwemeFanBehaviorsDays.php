<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays
{
    public const DAYS_15_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays = 'DAYS_15';
    public const DAYS_30_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays = 'DAYS_30';
    public const DAYS_60_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays = 'DAYS_60';

    public const ALLOWED_VALUES = [
        self::DAYS_15_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays,
        self::DAYS_30_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays,
        self::DAYS_60_QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceAwemeFanBehaviorsDays', $value));
        }
        return (string) $value;
    }
}
