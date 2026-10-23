<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringStarAutoDeliverySwitch
{
    public const OFF_PromotionListV30FilteringStarAutoDeliverySwitch = 'OFF';
    public const ON_PromotionListV30FilteringStarAutoDeliverySwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionListV30FilteringStarAutoDeliverySwitch,
        self::ON_PromotionListV30FilteringStarAutoDeliverySwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringStarAutoDeliverySwitch', $value));
        }
        return (string) $value;
    }
}
