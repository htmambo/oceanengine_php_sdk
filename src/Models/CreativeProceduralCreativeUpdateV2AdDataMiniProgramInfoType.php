<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType
{
    public const BYTE_GAME_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType = 'BYTE_GAME';
    public const BYTE_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType = 'BYTE_APP';
    public const SHELL_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType = 'SHELL_APP';
    public const TEMPLATE_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType = 'TEMPLATE_APP';

    public const ALLOWED_VALUES = [
        self::BYTE_GAME_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType,
        self::BYTE_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType,
        self::SHELL_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType,
        self::TEMPLATE_APP_CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeUpdateV2AdDataMiniProgramInfoType', $value));
        }
        return (string) $value;
    }
}
