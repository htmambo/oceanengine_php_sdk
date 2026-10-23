<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30FilteringSource
{
    public const AUTO_NativeAnchorGetV30FilteringSource = 'AUTO';
    public const CUSTOM_NativeAnchorGetV30FilteringSource = 'CUSTOM';
    public const GROUP_NativeAnchorGetV30FilteringSource = 'GROUP';
    public const MANUAL_NativeAnchorGetV30FilteringSource = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::AUTO_NativeAnchorGetV30FilteringSource,
        self::CUSTOM_NativeAnchorGetV30FilteringSource,
        self::GROUP_NativeAnchorGetV30FilteringSource,
        self::MANUAL_NativeAnchorGetV30FilteringSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30FilteringSource', $value));
        }
        return (string) $value;
    }
}
