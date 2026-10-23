<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePlayableListV30DataMaterialsAuditStatus
{
    public const STATUS_CONFIRMED_FilePlayableListV30DataMaterialsAuditStatus = 'STATUS_CONFIRMED';
    public const STATUS_CONFIRMING_FilePlayableListV30DataMaterialsAuditStatus = 'STATUS_CONFIRMING';
    public const STATUS_CONFIRM_FAIL_FilePlayableListV30DataMaterialsAuditStatus = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRMED_FilePlayableListV30DataMaterialsAuditStatus,
        self::STATUS_CONFIRMING_FilePlayableListV30DataMaterialsAuditStatus,
        self::STATUS_CONFIRM_FAIL_FilePlayableListV30DataMaterialsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePlayableListV30DataMaterialsAuditStatus', $value));
        }
        return (string) $value;
    }
}
