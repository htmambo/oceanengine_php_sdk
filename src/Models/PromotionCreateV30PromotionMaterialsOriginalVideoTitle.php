<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsOriginalVideoTitle
{
    public const OFF_PromotionCreateV30PromotionMaterialsOriginalVideoTitle = 'OFF';
    public const ON_PromotionCreateV30PromotionMaterialsOriginalVideoTitle = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionCreateV30PromotionMaterialsOriginalVideoTitle,
        self::ON_PromotionCreateV30PromotionMaterialsOriginalVideoTitle,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsOriginalVideoTitle', $value));
        }
        return (string) $value;
    }
}
