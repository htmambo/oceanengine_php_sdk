<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OpenMaterialAuditProGetV30DataInputType
{
    public const VID_OpenMaterialAuditProGetV30DataInputType = 'VID';
    public const FILEID_OpenMaterialAuditProGetV30DataInputType = 'FILEID';

    public const ALLOWED_VALUES = [
        self::VID_OpenMaterialAuditProGetV30DataInputType,
        self::FILEID_OpenMaterialAuditProGetV30DataInputType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OpenMaterialAuditProGetV30DataInputType', $value));
        }
        return (string) $value;
    }
}
