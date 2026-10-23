<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataDynamicCreativeSwitch
{
    public const DYNAMIC_CREATIVE_ABSTRACT_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ABSTRACT';
    public const DYNAMIC_CREATIVE_ON_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_ON';
    public const DYNAMIC_CREATIVE_SUBLINK_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_SUBLINK';
    public const DYNAMIC_CREATIVE_TITLE_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch = 'DYNAMIC_CREATIVE_TITLE';

    public const ALLOWED_VALUES = [
        self::DYNAMIC_CREATIVE_ABSTRACT_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_ON_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_SUBLINK_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch,
        self::DYNAMIC_CREATIVE_TITLE_CreativeDetailGetV30DataAdDataDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
