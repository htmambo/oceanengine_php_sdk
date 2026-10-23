<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpPlayableUploadV30AccountType
{
    public const EBP_ToolsEbpPlayableUploadV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::EBP_ToolsEbpPlayableUploadV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpPlayableUploadV30AccountType', $value));
        }
        return (string) $value;
    }
}
