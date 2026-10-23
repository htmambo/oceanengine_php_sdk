<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30DownloadMode
{
    public const APP_STORE_DELIVERY_StdProjectCreateV30DownloadMode = 'APP_STORE_DELIVERY';
    public const DEFAULT_StdProjectCreateV30DownloadMode = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::APP_STORE_DELIVERY_StdProjectCreateV30DownloadMode,
        self::DEFAULT_StdProjectCreateV30DownloadMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30DownloadMode', $value));
        }
        return (string) $value;
    }
}
