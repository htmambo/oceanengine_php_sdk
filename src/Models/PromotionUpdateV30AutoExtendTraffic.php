<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30AutoExtendTraffic
{
    public const OFF_PromotionUpdateV30AutoExtendTraffic = 'OFF';
    public const ON_PromotionUpdateV30AutoExtendTraffic = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_PromotionUpdateV30AutoExtendTraffic,
        self::ON_PromotionUpdateV30AutoExtendTraffic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30AutoExtendTraffic', $value));
        }
        return (string) $value;
    }
}
