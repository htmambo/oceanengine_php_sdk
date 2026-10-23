<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringHasCarryMaterial
{
    public const TRUE_PromotionListV30FilteringHasCarryMaterial = 'TRUE';
    public const FALSE_PromotionListV30FilteringHasCarryMaterial = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_PromotionListV30FilteringHasCarryMaterial,
        self::FALSE_PromotionListV30FilteringHasCarryMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringHasCarryMaterial', $value));
        }
        return (string) $value;
    }
}
