<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListHasCarryMaterial
{
    public const TRUE_PromotionListV30DataListHasCarryMaterial = 'TRUE';
    public const FALSE_PromotionListV30DataListHasCarryMaterial = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_PromotionListV30DataListHasCarryMaterial,
        self::FALSE_PromotionListV30DataListHasCarryMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListHasCarryMaterial', $value));
        }
        return (string) $value;
    }
}
