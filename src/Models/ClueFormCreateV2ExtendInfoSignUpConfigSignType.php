<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormCreateV2ExtendInfoSignUpConfigSignType
{
    public const SIGN_TYPE_SCROLL_BAR_ClueFormCreateV2ExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_BAR';
    public const SIGN_TYPE_SCROLL_WALL_ClueFormCreateV2ExtendInfoSignUpConfigSignType = 'SIGN_TYPE_SCROLL_WALL';

    public const ALLOWED_VALUES = [
        self::SIGN_TYPE_SCROLL_BAR_ClueFormCreateV2ExtendInfoSignUpConfigSignType,
        self::SIGN_TYPE_SCROLL_WALL_ClueFormCreateV2ExtendInfoSignUpConfigSignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormCreateV2ExtendInfoSignUpConfigSignType', $value));
        }
        return (string) $value;
    }
}
