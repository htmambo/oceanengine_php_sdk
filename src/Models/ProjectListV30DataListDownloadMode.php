<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDownloadMode
{
    public const APP_STORE_DELIVERY_ProjectListV30DataListDownloadMode = 'APP_STORE_DELIVERY';
    public const DEFAULT_ProjectListV30DataListDownloadMode = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::APP_STORE_DELIVERY_ProjectListV30DataListDownloadMode,
        self::DEFAULT_ProjectListV30DataListDownloadMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDownloadMode', $value));
        }
        return (string) $value;
    }
}
