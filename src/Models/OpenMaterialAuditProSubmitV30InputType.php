<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OpenMaterialAuditProSubmitV30InputType
{
    public const VID_OpenMaterialAuditProSubmitV30InputType = 'VID';
    public const FILELD_OpenMaterialAuditProSubmitV30InputType = 'FILELD';

    public const ALLOWED_VALUES = [
        self::VID_OpenMaterialAuditProSubmitV30InputType,
        self::FILELD_OpenMaterialAuditProSubmitV30InputType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OpenMaterialAuditProSubmitV30InputType', $value));
        }
        return (string) $value;
    }
}
