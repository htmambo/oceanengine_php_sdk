<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30DataFailedRecordsAccountAccountType
{
    public const EBP_ToolsEbpAssetAuthV30DataFailedRecordsAccountAccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::EBP_ToolsEbpAssetAuthV30DataFailedRecordsAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30DataFailedRecordsAccountAccountType', $value));
        }
        return (string) $value;
    }
}
