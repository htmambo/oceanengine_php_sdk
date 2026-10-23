<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListCampaignBudgetOptimization
{
    public const OFF_CampaignGetV2DataListCampaignBudgetOptimization = 'OFF';
    public const ON_CampaignGetV2DataListCampaignBudgetOptimization = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CampaignGetV2DataListCampaignBudgetOptimization,
        self::ON_CampaignGetV2DataListCampaignBudgetOptimization,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListCampaignBudgetOptimization', $value));
        }
        return (string) $value;
    }
}
