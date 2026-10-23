<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialStatusUpdateV30DataOptStatus
{
    public const DISABLE_OcProjectMaterialStatusUpdateV30DataOptStatus = 'DISABLE';
    public const ENABLE_OcProjectMaterialStatusUpdateV30DataOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_OcProjectMaterialStatusUpdateV30DataOptStatus,
        self::ENABLE_OcProjectMaterialStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
