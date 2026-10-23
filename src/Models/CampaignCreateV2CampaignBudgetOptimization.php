<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2CampaignBudgetOptimization
{
    public const OFF_CampaignCreateV2CampaignBudgetOptimization = 'OFF';
    public const ON_CampaignCreateV2CampaignBudgetOptimization = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CampaignCreateV2CampaignBudgetOptimization,
        self::ON_CampaignCreateV2CampaignBudgetOptimization,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2CampaignBudgetOptimization', $value));
        }
        return (string) $value;
    }
}
