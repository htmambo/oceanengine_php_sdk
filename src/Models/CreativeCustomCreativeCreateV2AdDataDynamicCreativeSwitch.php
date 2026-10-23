<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch
{
    public const DYNAMIC_CREATIVE_ON_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ON';
    public const DYNAMIC_CREATIVE_ABSTRACT_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ABSTRACT';
    public const DYNAMIC_CREATIVE_TITLE_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_TITLE';
    public const DYNAMIC_CREATIVE_SUBLINK_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_SUBLINK';

    public const ALLOWED_VALUES = [
        self::DYNAMIC_CREATIVE_ON_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_ABSTRACT_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_TITLE_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_SUBLINK_CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
