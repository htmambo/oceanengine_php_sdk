<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormUpdateV2ExtendInfoSignUpConfigSignType
{
    public const SIGN_TYPE_SCROLL_BAR_ClueFormUpdateV2ExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_BAR';
    public const SIGN_TYPE_SCROLL_WALL_ClueFormUpdateV2ExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_WALL';

    public const ALLOWED_VALUES = [
        self::SIGN_TYPE_SCROLL_BAR_ClueFormUpdateV2ExtendInfoSignUpConfigSignType,
        self::SIGN_TYPE_SCROLL_WALL_ClueFormUpdateV2ExtendInfoSignUpConfigSignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormUpdateV2ExtendInfoSignUpConfigSignType', $value));
        }
        return (string) $value;
    }
}
