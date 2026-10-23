<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch
{
    public const ON_PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch = 'ON';
    public const OFF_PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch,
        self::OFF_PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionEasyKeepDeliverySwitchUpdateV30KeepDeliverySwitch', $value));
        }
        return (string) $value;
    }
}
