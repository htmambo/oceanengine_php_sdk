<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportMaterialGetV30FilteringDeliveryMode
{
    public const CDP_AUTO_MODE_LocalReportMaterialGetV30FilteringDeliveryMode = 'CDP_AUTO_MODE';
    public const MANUAL_MODE_LocalReportMaterialGetV30FilteringDeliveryMode = 'MANUAL_MODE';

    public const ALLOWED_VALUES = [
        self::CDP_AUTO_MODE_LocalReportMaterialGetV30FilteringDeliveryMode,
        self::MANUAL_MODE_LocalReportMaterialGetV30FilteringDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportMaterialGetV30FilteringDeliveryMode', $value));
        }
        return (string) $value;
    }
}
