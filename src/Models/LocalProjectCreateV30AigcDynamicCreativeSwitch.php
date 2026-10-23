<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AigcDynamicCreativeSwitch
{
    public const AIGC_DYNAMIC_CREATIVE_SWITCH_OFF_LocalProjectCreateV30AigcDynamicCreativeSwitch = 'AIGC_DYNAMIC_CREATIVE_SWITCH_OFF';
    public const AIGC_DYNAMIC_CREATIVE_SWITCH_ON_LocalProjectCreateV30AigcDynamicCreativeSwitch = 'AIGC_DYNAMIC_CREATIVE_SWITCH_ON';

    public const ALLOWED_VALUES = [
        self::AIGC_DYNAMIC_CREATIVE_SWITCH_OFF_LocalProjectCreateV30AigcDynamicCreativeSwitch,
        self::AIGC_DYNAMIC_CREATIVE_SWITCH_ON_LocalProjectCreateV30AigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
