<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType
{
    public const ONE_JUMP_NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType = 'ONE_JUMP';
    public const TWO_JUMP_NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType = 'TWO_JUMP';

    public const ALLOWED_VALUES = [
        self::ONE_JUMP_NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType,
        self::TWO_JUMP_NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListShoppingCartAnchorLinkType', $value));
        }
        return (string) $value;
    }
}
