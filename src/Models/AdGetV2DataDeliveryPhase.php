<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDeliveryPhase
{
    public const FIRST_PHASE_AdGetV2DataDeliveryPhase = 'FIRST_PHASE';
    public const SECOND_PHASE_AdGetV2DataDeliveryPhase = 'SECOND_PHASE';

    public const ALLOWED_VALUES = [
        self::FIRST_PHASE_AdGetV2DataDeliveryPhase,
        self::SECOND_PHASE_AdGetV2DataDeliveryPhase,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDeliveryPhase', $value));
        }
        return (string) $value;
    }
}
