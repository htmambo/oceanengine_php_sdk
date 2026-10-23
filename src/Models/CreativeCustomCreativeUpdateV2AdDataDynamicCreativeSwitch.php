<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch
{
    public const DYNAMIC_CREATIVE_ON_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ON';
    public const DYNAMIC_CREATIVE_ABSTRACT_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ABSTRACT';
    public const DYNAMIC_CREATIVE_TITLE_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_TITLE';
    public const DYNAMIC_CREATIVE_SUBLINK_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_SUBLINK';

    public const ALLOWED_VALUES = [
        self::DYNAMIC_CREATIVE_ON_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_ABSTRACT_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_TITLE_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_SUBLINK_CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
