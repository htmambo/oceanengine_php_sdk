<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsOriginalVideoTitle
{
    public const OFF_PromotionListV30DataListPromotionMaterialsOriginalVideoTitle = 'OFF';
    public const ON_PromotionListV30DataListPromotionMaterialsOriginalVideoTitle = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionListV30DataListPromotionMaterialsOriginalVideoTitle,
        self::ON_PromotionListV30DataListPromotionMaterialsOriginalVideoTitle,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsOriginalVideoTitle', $value));
        }
        return (string) $value;
    }
}
