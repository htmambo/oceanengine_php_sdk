<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays
{
    public const DAYS_15_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays = 'DAYS_15';
    public const DAYS_30_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays = 'DAYS_30';
    public const DAYS_60_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays = 'DAYS_60';

    public const ALLOWED_VALUES = [
        self::DAYS_15_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays,
        self::DAYS_30_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays,
        self::DAYS_60_QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceAwemeFanBehaviorsDays', $value));
        }
        return (string) $value;
    }
}
