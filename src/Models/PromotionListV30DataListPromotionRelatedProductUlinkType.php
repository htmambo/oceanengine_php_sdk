<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductUlinkType
{
    public const UNIVERSAL_LINK_PromotionListV30DataListPromotionRelatedProductUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionListV30DataListPromotionRelatedProductUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionListV30DataListPromotionRelatedProductUlinkType,
        self::APPLINK_PromotionListV30DataListPromotionRelatedProductUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductUlinkType', $value));
        }
        return (string) $value;
    }
}
