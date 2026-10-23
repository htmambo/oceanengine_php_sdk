<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringDeliveryMode
{
    public const STANDARD_ReportAdGetV2FilteringDeliveryMode = 'STANDARD';
    public const ADLAB_FREE_ReportAdGetV2FilteringDeliveryMode = 'ADLAB_FREE';

    public const ALLOWED_VALUES = [
        self::STANDARD_ReportAdGetV2FilteringDeliveryMode,
        self::ADLAB_FREE_ReportAdGetV2FilteringDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringDeliveryMode', $value));
        }
        return (string) $value;
    }
}
