<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCountryInfoV2Language
{
    public const ZH_CN_ToolsCountryInfoV2Language = 'ZH_CN';
    public const ZH_CN_GOV_ToolsCountryInfoV2Language = 'ZH_CN_GOV';

    public const ALLOWED_VALUES = [
        self::ZH_CN_ToolsCountryInfoV2Language,
        self::ZH_CN_GOV_ToolsCountryInfoV2Language,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCountryInfoV2Language', $value));
        }
        return (string) $value;
    }
}
