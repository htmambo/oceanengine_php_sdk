<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterAdvancedOption
{
    public const IMAGE_TEXT_BrandOrderListV30FilterAdvancedOption = 'IMAGE_TEXT';
    public const VIDEO_BrandOrderListV30FilterAdvancedOption = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_TEXT_BrandOrderListV30FilterAdvancedOption,
        self::VIDEO_BrandOrderListV30FilterAdvancedOption,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterAdvancedOption', $value));
        }
        return (string) $value;
    }
}
