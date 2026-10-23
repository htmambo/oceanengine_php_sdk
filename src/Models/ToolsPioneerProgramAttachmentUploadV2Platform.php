<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPioneerProgramAttachmentUploadV2Platform
{
    public const KUAI_SHOU_ToolsPioneerProgramAttachmentUploadV2Platform = 'KUAI_SHOU';
    public const OCEAN_ENGINE_ToolsPioneerProgramAttachmentUploadV2Platform = 'OCEAN_ENGINE';
    public const TENCENT_ToolsPioneerProgramAttachmentUploadV2Platform = 'TENCENT';

    public const ALLOWED_VALUES = [
        self::KUAI_SHOU_ToolsPioneerProgramAttachmentUploadV2Platform,
        self::OCEAN_ENGINE_ToolsPioneerProgramAttachmentUploadV2Platform,
        self::TENCENT_ToolsPioneerProgramAttachmentUploadV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPioneerProgramAttachmentUploadV2Platform', $value));
        }
        return (string) $value;
    }
}
