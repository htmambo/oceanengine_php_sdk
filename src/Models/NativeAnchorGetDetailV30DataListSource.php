<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListSource
{
    public const AUTO_NativeAnchorGetDetailV30DataListSource = 'AUTO';
    public const CUSTOM_NativeAnchorGetDetailV30DataListSource = 'CUSTOM';
    public const REPLACE_DOWNLOAD_NativeAnchorGetDetailV30DataListSource = 'REPLACE_DOWNLOAD';

    public const ALLOWED_VALUES = [
        self::AUTO_NativeAnchorGetDetailV30DataListSource,
        self::CUSTOM_NativeAnchorGetDetailV30DataListSource,
        self::REPLACE_DOWNLOAD_NativeAnchorGetDetailV30DataListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListSource', $value));
        }
        return (string) $value;
    }
}
