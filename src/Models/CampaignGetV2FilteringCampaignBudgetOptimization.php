<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2FilteringCampaignBudgetOptimization
{
    public const OFF_CampaignGetV2FilteringCampaignBudgetOptimization = 'OFF';
    public const ON_CampaignGetV2FilteringCampaignBudgetOptimization = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CampaignGetV2FilteringCampaignBudgetOptimization,
        self::ON_CampaignGetV2FilteringCampaignBudgetOptimization,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2FilteringCampaignBudgetOptimization', $value));
        }
        return (string) $value;
    }
}
