<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionRelatedProductUlinkType
{
    public const UNIVERSAL_LINK_PromotionCreateV30PromotionRelatedProductUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionCreateV30PromotionRelatedProductUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionCreateV30PromotionRelatedProductUlinkType,
        self::APPLINK_PromotionCreateV30PromotionRelatedProductUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionRelatedProductUlinkType', $value));
        }
        return (string) $value;
    }
}
