<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType
{
    public const ONE_JUMP_NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType = 'ONE_JUMP';
    public const TWO_JUMP_NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType = 'TWO_JUMP';

    public const ALLOWED_VALUES = [
        self::ONE_JUMP_NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType,
        self::TWO_JUMP_NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoShoppingCartAnchorLinkType', $value));
        }
        return (string) $value;
    }
}
