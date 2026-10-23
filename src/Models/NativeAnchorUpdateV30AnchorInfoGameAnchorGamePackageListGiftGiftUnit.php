<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit
{
    public const INDIVIDUAL_NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit = 'INDIVIDUAL';
    public const MYRIAD_NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit = 'MYRIAD';

    public const ALLOWED_VALUES = [
        self::INDIVIDUAL_NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit,
        self::MYRIAD_NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoGameAnchorGamePackageListGiftGiftUnit', $value));
        }
        return (string) $value;
    }
}
