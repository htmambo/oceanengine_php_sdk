<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListFollowLifeAccountType
{
    public const HEAD_ToolsClueLifeGetV2DataListFollowLifeAccountType = 'HEAD';
    public const REGION_ToolsClueLifeGetV2DataListFollowLifeAccountType = 'REGION';
    public const SINGLE_ToolsClueLifeGetV2DataListFollowLifeAccountType = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::HEAD_ToolsClueLifeGetV2DataListFollowLifeAccountType,
        self::REGION_ToolsClueLifeGetV2DataListFollowLifeAccountType,
        self::SINGLE_ToolsClueLifeGetV2DataListFollowLifeAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListFollowLifeAccountType', $value));
        }
        return (string) $value;
    }
}
