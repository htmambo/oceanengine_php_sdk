<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch
{
    public const OFF_PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch = 'OFF';
    public const ON_PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch,
        self::ON_PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
