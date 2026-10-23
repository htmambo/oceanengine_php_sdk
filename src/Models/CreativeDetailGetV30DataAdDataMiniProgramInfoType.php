<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataMiniProgramInfoType
{
    public const BYTE_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType = 'BYTE_APP';
    public const BYTE_GAME_CreativeDetailGetV30DataAdDataMiniProgramInfoType = 'BYTE_GAME';
    public const SHELL_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType = 'SHELL_APP';
    public const TEMPLATE_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType = 'TEMPLATE_APP';

    public const ALLOWED_VALUES = [
        self::BYTE_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType,
        self::BYTE_GAME_CreativeDetailGetV30DataAdDataMiniProgramInfoType,
        self::SHELL_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType,
        self::TEMPLATE_APP_CreativeDetailGetV30DataAdDataMiniProgramInfoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataMiniProgramInfoType', $value));
        }
        return (string) $value;
    }
}
