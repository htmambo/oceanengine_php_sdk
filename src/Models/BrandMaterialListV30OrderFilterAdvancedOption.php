<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterAdvancedOption
{
    public const IMAGE_TEXT_BrandMaterialListV30OrderFilterAdvancedOption = 'IMAGE_TEXT';
    public const VIDEO_BrandMaterialListV30OrderFilterAdvancedOption = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_TEXT_BrandMaterialListV30OrderFilterAdvancedOption,
        self::VIDEO_BrandMaterialListV30OrderFilterAdvancedOption,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterAdvancedOption', $value));
        }
        return (string) $value;
    }
}
