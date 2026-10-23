<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidGetV30DataJointBidMode
{
    public const RATIO_ToolsJointBidGetV30DataJointBidMode = 'RATIO';
    public const TARGET_ToolsJointBidGetV30DataJointBidMode = 'TARGET';
    public const TARGET_RTA_ToolsJointBidGetV30DataJointBidMode = 'TARGET_RTA';

    public const ALLOWED_VALUES = [
        self::RATIO_ToolsJointBidGetV30DataJointBidMode,
        self::TARGET_ToolsJointBidGetV30DataJointBidMode,
        self::TARGET_RTA_ToolsJointBidGetV30DataJointBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidGetV30DataJointBidMode', $value));
        }
        return (string) $value;
    }
}
