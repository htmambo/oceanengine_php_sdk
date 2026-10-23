<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays
{
    public const DAYS_15_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays = 'DAYS_15';
    public const DAYS_30_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays = 'DAYS_30';
    public const DAYS_60_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays = 'DAYS_60';

    public const ALLOWED_VALUES = [
        self::DAYS_15_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays,
        self::DAYS_30_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays,
        self::DAYS_60_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviorsDays', $value));
        }
        return (string) $value;
    }
}
