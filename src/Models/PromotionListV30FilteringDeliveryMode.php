<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringDeliveryMode
{
    public const MANUAL_PromotionListV30FilteringDeliveryMode = 'MANUAL';
    public const PROCEDURAL_PromotionListV30FilteringDeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_PromotionListV30FilteringDeliveryMode,
        self::PROCEDURAL_PromotionListV30FilteringDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringDeliveryMode', $value));
        }
        return (string) $value;
    }
}
