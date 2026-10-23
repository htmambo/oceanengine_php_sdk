<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30DownloadMode
{
    public const APP_STORE_DELIVERY_StdProjectUpdateV30DownloadMode = 'APP_STORE_DELIVERY';
    public const DEFAULT_StdProjectUpdateV30DownloadMode = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::APP_STORE_DELIVERY_StdProjectUpdateV30DownloadMode,
        self::DEFAULT_StdProjectUpdateV30DownloadMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30DownloadMode', $value));
        }
        return (string) $value;
    }
}
