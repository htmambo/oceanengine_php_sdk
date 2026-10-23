<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAigcDynamicCreativeSwitch
{
    public const AIGC_DYNAMIC_CREATIVE_SWITCH_OFF_LocalProjectDetailV30DataAigcDynamicCreativeSwitch = 'AIGC_DYNAMIC_CREATIVE_SWITCH_OFF';
    public const AIGC_DYNAMIC_CREATIVE_SWITCH_ON_LocalProjectDetailV30DataAigcDynamicCreativeSwitch = 'AIGC_DYNAMIC_CREATIVE_SWITCH_ON';

    public const ALLOWED_VALUES = [
        self::AIGC_DYNAMIC_CREATIVE_SWITCH_OFF_LocalProjectDetailV30DataAigcDynamicCreativeSwitch,
        self::AIGC_DYNAMIC_CREATIVE_SWITCH_ON_LocalProjectDetailV30DataAigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
