<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30PaymentType
{
    public const FREE_ToolsEbpAppUpdateV30PaymentType = 'FREE';
    public const PRODUCT_ToolsEbpAppUpdateV30PaymentType = 'PRODUCT';
    public const TRIAL_AND_LIMIT_FUNCTIONS_ToolsEbpAppUpdateV30PaymentType = 'TRIAL_AND_LIMIT_FUNCTIONS';
    public const TRIAL_AND_PURCHASE_ToolsEbpAppUpdateV30PaymentType = 'TRIAL_AND_PURCHASE';

    public const ALLOWED_VALUES = [
        self::FREE_ToolsEbpAppUpdateV30PaymentType,
        self::PRODUCT_ToolsEbpAppUpdateV30PaymentType,
        self::TRIAL_AND_LIMIT_FUNCTIONS_ToolsEbpAppUpdateV30PaymentType,
        self::TRIAL_AND_PURCHASE_ToolsEbpAppUpdateV30PaymentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30PaymentType', $value));
        }
        return (string) $value;
    }
}
