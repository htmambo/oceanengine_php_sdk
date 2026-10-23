<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpSubjectListV30FilterStatus
{
    public const AVAILABLE_ToolsEbpSubjectListV30FilterStatus = 'AVAILABLE';
    public const AVAILABLE_EVER_ToolsEbpSubjectListV30FilterStatus = 'AVAILABLE_EVER';
    public const UNAVALIABLE_ToolsEbpSubjectListV30FilterStatus = 'UNAVALIABLE';

    public const ALLOWED_VALUES = [
        self::AVAILABLE_ToolsEbpSubjectListV30FilterStatus,
        self::AVAILABLE_EVER_ToolsEbpSubjectListV30FilterStatus,
        self::UNAVALIABLE_ToolsEbpSubjectListV30FilterStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpSubjectListV30FilterStatus', $value));
        }
        return (string) $value;
    }
}
