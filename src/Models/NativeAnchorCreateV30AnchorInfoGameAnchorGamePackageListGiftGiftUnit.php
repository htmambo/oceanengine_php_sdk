<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit
{
    public const INDIVIDUAL_NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit = 'INDIVIDUAL';
    public const MYRIAD_NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit = 'MYRIAD';

    public const ALLOWED_VALUES = [
        self::INDIVIDUAL_NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit,
        self::MYRIAD_NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorCreateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit', $value));
        }
        return (string) $value;
    }
}
