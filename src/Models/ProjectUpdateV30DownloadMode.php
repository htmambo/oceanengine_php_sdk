<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30DownloadMode
{
    public const APP_STORE_DELIVERY_ProjectUpdateV30DownloadMode = 'APP_STORE_DELIVERY';
    public const DEFAULT_ProjectUpdateV30DownloadMode = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::APP_STORE_DELIVERY_ProjectUpdateV30DownloadMode,
        self::DEFAULT_ProjectUpdateV30DownloadMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30DownloadMode', $value));
        }
        return (string) $value;
    }
}
