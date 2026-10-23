<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityOpenMaterialAuditV30MsgType
{
    public const SEND_SecurityOpenMaterialAuditV30MsgType = 'SEND';
    public const RECALL_SecurityOpenMaterialAuditV30MsgType = 'RECALL';

    public const ALLOWED_VALUES = [
        self::SEND_SecurityOpenMaterialAuditV30MsgType,
        self::RECALL_SecurityOpenMaterialAuditV30MsgType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityOpenMaterialAuditV30MsgType', $value));
        }
        return (string) $value;
    }
}
