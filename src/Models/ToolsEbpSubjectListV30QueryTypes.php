<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpSubjectListV30QueryTypes
{
    public const BP_OTHER_ToolsEbpSubjectListV30QueryTypes = 'BP_OTHER';
    public const BP_OWN_ToolsEbpSubjectListV30QueryTypes = 'BP_OWN';

    public const ALLOWED_VALUES = [
        self::BP_OTHER_ToolsEbpSubjectListV30QueryTypes,
        self::BP_OWN_ToolsEbpSubjectListV30QueryTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpSubjectListV30QueryTypes', $value));
        }
        return (string) $value;
    }
}
