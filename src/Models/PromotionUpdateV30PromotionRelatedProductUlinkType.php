<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionRelatedProductUlinkType
{
    public const UNIVERSAL_LINK_PromotionUpdateV30PromotionRelatedProductUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionUpdateV30PromotionRelatedProductUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionUpdateV30PromotionRelatedProductUlinkType,
        self::APPLINK_PromotionUpdateV30PromotionRelatedProductUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionRelatedProductUlinkType', $value));
        }
        return (string) $value;
    }
}
