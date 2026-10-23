<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListOrderSceneType
{
    public const LIVE_DouplusOrderListV30DataOrderListOrderSceneType = 'LIVE';
    public const VIDEO_DouplusOrderListV30DataOrderListOrderSceneType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::LIVE_DouplusOrderListV30DataOrderListOrderSceneType,
        self::VIDEO_DouplusOrderListV30DataOrderListOrderSceneType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListOrderSceneType', $value));
        }
        return (string) $value;
    }
}
