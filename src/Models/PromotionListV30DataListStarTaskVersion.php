<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListStarTaskVersion
{
    public const FROM_AD_PromotionListV30DataListStarTaskVersion = 'FROM_AD';
    public const FROM_STAR_TO_BP_PromotionListV30DataListStarTaskVersion = 'FROM_STAR_TO_BP';

    public const ALLOWED_VALUES = [
        self::FROM_AD_PromotionListV30DataListStarTaskVersion,
        self::FROM_STAR_TO_BP_PromotionListV30DataListStarTaskVersion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListStarTaskVersion', $value));
        }
        return (string) $value;
    }
}
