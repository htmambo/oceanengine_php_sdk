<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30IncludingMaterialAtrributes
{
    public const RETURN_CARRY_DATA_PromotionListV30IncludingMaterialAtrributes = 'RETURN_CARRY_DATA';

    public const ALLOWED_VALUES = [
        self::RETURN_CARRY_DATA_PromotionListV30IncludingMaterialAtrributes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30IncludingMaterialAtrributes', $value));
        }
        return (string) $value;
    }
}
