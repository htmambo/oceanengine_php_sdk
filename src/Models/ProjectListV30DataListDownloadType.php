<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDownloadType
{
    public const DOWNLOAD_URL_ProjectListV30DataListDownloadType = 'DOWNLOAD_URL';
    public const EXTERNAL_URL_ProjectListV30DataListDownloadType = 'EXTERNAL_URL';
    public const QUICK_APP_URL_ProjectListV30DataListDownloadType = 'QUICK_APP_URL';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_URL_ProjectListV30DataListDownloadType,
        self::EXTERNAL_URL_ProjectListV30DataListDownloadType,
        self::QUICK_APP_URL_ProjectListV30DataListDownloadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDownloadType', $value));
        }
        return (string) $value;
    }
}
