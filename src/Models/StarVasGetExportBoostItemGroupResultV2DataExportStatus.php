<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetExportBoostItemGroupResultV2DataExportStatus
{
    public const DOING_StarVasGetExportBoostItemGroupResultV2DataExportStatus = 'DOING';
    public const FAIL_StarVasGetExportBoostItemGroupResultV2DataExportStatus = 'FAIL';
    public const PREPARE_StarVasGetExportBoostItemGroupResultV2DataExportStatus = 'PREPARE';
    public const SUCCESS_StarVasGetExportBoostItemGroupResultV2DataExportStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::DOING_StarVasGetExportBoostItemGroupResultV2DataExportStatus,
        self::FAIL_StarVasGetExportBoostItemGroupResultV2DataExportStatus,
        self::PREPARE_StarVasGetExportBoostItemGroupResultV2DataExportStatus,
        self::SUCCESS_StarVasGetExportBoostItemGroupResultV2DataExportStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetExportBoostItemGroupResultV2DataExportStatus', $value));
        }
        return (string) $value;
    }
}
