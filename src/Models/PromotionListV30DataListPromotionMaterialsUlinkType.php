<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsUlinkType
{
    public const UNIVERSAL_LINK_PromotionListV30DataListPromotionMaterialsUlinkType = 'UNIVERSAL_LINK';
    public const APPLINK_PromotionListV30DataListPromotionMaterialsUlinkType = 'APPLINK';

    public const ALLOWED_VALUES = [
        self::UNIVERSAL_LINK_PromotionListV30DataListPromotionMaterialsUlinkType,
        self::APPLINK_PromotionListV30DataListPromotionMaterialsUlinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsUlinkType', $value));
        }
        return (string) $value;
    }
}
