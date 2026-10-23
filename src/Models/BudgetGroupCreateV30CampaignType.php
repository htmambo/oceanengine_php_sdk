<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupCreateV30CampaignType
{
    public const ALL_BudgetGroupCreateV30CampaignType = 'ALL';
    public const SEARCH_BudgetGroupCreateV30CampaignType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_BudgetGroupCreateV30CampaignType,
        self::SEARCH_BudgetGroupCreateV30CampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupCreateV30CampaignType', $value));
        }
        return (string) $value;
    }
}
