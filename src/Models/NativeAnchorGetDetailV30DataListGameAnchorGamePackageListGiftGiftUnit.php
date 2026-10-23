<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit
{
    public const INDIVIDUAL_NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit = 'INDIVIDUAL';
    public const MYRIAD_NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit = 'MYRIAD';

    public const ALLOWED_VALUES = [
        self::INDIVIDUAL_NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit,
        self::MYRIAD_NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit', $value));
        }
        return (string) $value;
    }
}
