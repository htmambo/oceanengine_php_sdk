<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAdvancedOption
{
    public const IMAGE_TEXT_BrandOrderListV30DataOrdersAdvancedOption = 'IMAGE_TEXT';
    public const VIDEO_BrandOrderListV30DataOrdersAdvancedOption = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_TEXT_BrandOrderListV30DataOrdersAdvancedOption,
        self::VIDEO_BrandOrderListV30DataOrdersAdvancedOption,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAdvancedOption', $value));
        }
        return (string) $value;
    }
}
