<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsJointBidCreateV30JointBidMode
{
    public const RATIO_ToolsJointBidCreateV30JointBidMode = 'RATIO';
    public const TARGET_ToolsJointBidCreateV30JointBidMode = 'TARGET';
    public const TARGET_RTA_ToolsJointBidCreateV30JointBidMode = 'TARGET_RTA';

    public const ALLOWED_VALUES = [
        self::RATIO_ToolsJointBidCreateV30JointBidMode,
        self::TARGET_ToolsJointBidCreateV30JointBidMode,
        self::TARGET_RTA_ToolsJointBidCreateV30JointBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsJointBidCreateV30JointBidMode', $value));
        }
        return (string) $value;
    }
}
