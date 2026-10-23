<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsUlinkType
{
    public const UNIVERSAL_LINK_PromotionCreateV30PromotionMaterialsUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionCreateV30PromotionMaterialsUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionCreateV30PromotionMaterialsUlinkType,
        self::APPLINK_PromotionCreateV30PromotionMaterialsUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsUlinkType', $value));
        }
        return (string) $value;
    }
}
