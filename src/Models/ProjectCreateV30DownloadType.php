<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DownloadType
{
    public const DOWNLOAD_URL_ProjectCreateV30DownloadType = 'DOWNLOAD_URL';
    public const EXTERNAL_URL_ProjectCreateV30DownloadType = 'EXTERNAL_URL';
    public const QUICK_APP_URL_ProjectCreateV30DownloadType = 'QUICK_APP_URL';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_URL_ProjectCreateV30DownloadType,
        self::EXTERNAL_URL_ProjectCreateV30DownloadType,
        self::QUICK_APP_URL_ProjectCreateV30DownloadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DownloadType', $value));
        }
        return (string) $value;
    }
}
