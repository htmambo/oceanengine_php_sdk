<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsUlinkType
{
    public const UNIVERSAL_LINK_PromotionUpdateV30PromotionMaterialsUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionUpdateV30PromotionMaterialsUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionUpdateV30PromotionMaterialsUlinkType,
        self::APPLINK_PromotionUpdateV30PromotionMaterialsUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsUlinkType', $value));
        }
        return (string) $value;
    }
}
