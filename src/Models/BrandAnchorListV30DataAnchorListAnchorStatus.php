<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAnchorListV30DataAnchorListAnchorStatus
{
    public const AUDITING_BrandAnchorListV30DataAnchorListAnchorStatus = 'AUDITING';
    public const DELETE_BrandAnchorListV30DataAnchorListAnchorStatus = 'DELETE';
    public const PASS_BrandAnchorListV30DataAnchorListAnchorStatus = 'PASS';
    public const REJECT_BrandAnchorListV30DataAnchorListAnchorStatus = 'REJECT';

    public const ALLOWED_VALUES = [
        self::AUDITING_BrandAnchorListV30DataAnchorListAnchorStatus,
        self::DELETE_BrandAnchorListV30DataAnchorListAnchorStatus,
        self::PASS_BrandAnchorListV30DataAnchorListAnchorStatus,
        self::REJECT_BrandAnchorListV30DataAnchorListAnchorStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAnchorListV30DataAnchorListAnchorStatus', $value));
        }
        return (string) $value;
    }
}
