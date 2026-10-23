<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays
{
    public const DAYS_15_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays = 'DAYS_15';
    public const DAYS_30_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays = 'DAYS_30';
    public const DAYS_60_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays = 'DAYS_60';

    public const ALLOWED_VALUES = [
        self::DAYS_15_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays,
        self::DAYS_30_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays,
        self::DAYS_60_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviorsDays', $value));
        }
        return (string) $value;
    }
}
