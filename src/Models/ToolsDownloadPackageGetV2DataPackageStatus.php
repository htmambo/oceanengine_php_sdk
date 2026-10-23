<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsDownloadPackageGetV2DataPackageStatus
{
    public const NEW_PACKAGE_ToolsDownloadPackageGetV2DataPackageStatus = 'NEW_PACKAGE';
    public const PARSING_ToolsDownloadPackageGetV2DataPackageStatus = 'PARSING';
    public const SUCCESS_ToolsDownloadPackageGetV2DataPackageStatus = 'SUCCESS';
    public const FAIL_ToolsDownloadPackageGetV2DataPackageStatus = 'FAIL';

    public const ALLOWED_VALUES = [
        self::NEW_PACKAGE_ToolsDownloadPackageGetV2DataPackageStatus,
        self::PARSING_ToolsDownloadPackageGetV2DataPackageStatus,
        self::SUCCESS_ToolsDownloadPackageGetV2DataPackageStatus,
        self::FAIL_ToolsDownloadPackageGetV2DataPackageStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsDownloadPackageGetV2DataPackageStatus', $value));
        }
        return (string) $value;
    }
}
