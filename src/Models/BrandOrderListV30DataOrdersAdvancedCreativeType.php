<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAdvancedCreativeType
{
    public const INTERACTIVE_SPACE_BrandOrderListV30DataOrdersAdvancedCreativeType = 'INTERACTIVE_SPACE';
    public const NONE_BrandOrderListV30DataOrdersAdvancedCreativeType = 'NONE';

    public const ALLOWED_VALUES = [
        self::INTERACTIVE_SPACE_BrandOrderListV30DataOrdersAdvancedCreativeType,
        self::NONE_BrandOrderListV30DataOrdersAdvancedCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAdvancedCreativeType', $value));
        }
        return (string) $value;
    }
}
