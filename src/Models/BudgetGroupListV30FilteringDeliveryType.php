<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30FilteringDeliveryType
{
    public const MANUAL_BudgetGroupListV30FilteringDeliveryType = 'MANUAL';
    public const PROCEDURAL_BudgetGroupListV30FilteringDeliveryType = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_BudgetGroupListV30FilteringDeliveryType,
        self::PROCEDURAL_BudgetGroupListV30FilteringDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30FilteringDeliveryType', $value));
        }
        return (string) $value;
    }
}
