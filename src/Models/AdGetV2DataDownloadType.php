<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDownloadType
{
    public const EXTERNAL_URL_AdGetV2DataDownloadType = 'EXTERNAL_URL';
    public const DOWNLOAD_URL_AdGetV2DataDownloadType = 'DOWNLOAD_URL';

    public const ALLOWED_VALUES = [
        self::EXTERNAL_URL_AdGetV2DataDownloadType,
        self::DOWNLOAD_URL_AdGetV2DataDownloadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDownloadType', $value));
        }
        return (string) $value;
    }
}
