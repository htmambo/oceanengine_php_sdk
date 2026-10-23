<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanSuggestRoiGoalV10CampaignScene
{
    public const DAILY_SALE_QianchuanSuggestRoiGoalV10CampaignScene = 'DAILY_SALE';
    public const NEW_CUSTOMER_TRANSFORMATION_QianchuanSuggestRoiGoalV10CampaignScene = 'NEW_CUSTOMER_TRANSFORMATION';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanSuggestRoiGoalV10CampaignScene,
        self::NEW_CUSTOMER_TRANSFORMATION_QianchuanSuggestRoiGoalV10CampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanSuggestRoiGoalV10CampaignScene', $value));
        }
        return (string) $value;
    }
}
