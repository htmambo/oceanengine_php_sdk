<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPioneerProgramAttachmentUploadV2DataFileType
{
    public const AD_SETTING_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType = 'AD_SETTING_DATA';
    public const BASIC_STAT_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType = 'BASIC_STAT_DATA';
    public const DEEP_STAT_DAILY_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType = 'DEEP_STAT_DAILY_DATA';
    public const DEEP_STAT_HOURLY_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType = 'DEEP_STAT_HOURLY_DATA';
    public const MATERIAL_MAPPING_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType = 'MATERIAL_MAPPING_DATA';

    public const ALLOWED_VALUES = [
        self::AD_SETTING_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType,
        self::BASIC_STAT_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType,
        self::DEEP_STAT_DAILY_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType,
        self::DEEP_STAT_HOURLY_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType,
        self::MATERIAL_MAPPING_DATA_ToolsPioneerProgramAttachmentUploadV2DataFileType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPioneerProgramAttachmentUploadV2DataFileType', $value));
        }
        return (string) $value;
    }
}
