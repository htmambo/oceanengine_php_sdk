<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataIntelligentFlowSwitch
{
    public const OFF_AdGetV2DataIntelligentFlowSwitch = 'OFF';
    public const ON_AdGetV2DataIntelligentFlowSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AdGetV2DataIntelligentFlowSwitch,
        self::ON_AdGetV2DataIntelligentFlowSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataIntelligentFlowSwitch', $value));
        }
        return (string) $value;
    }
}
