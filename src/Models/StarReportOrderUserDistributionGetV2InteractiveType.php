<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportOrderUserDistributionGetV2InteractiveType
{
    public const VV_StarReportOrderUserDistributionGetV2InteractiveType = 'VV';
    public const SHARE_StarReportOrderUserDistributionGetV2InteractiveType = 'SHARE';
    public const LIKE_StarReportOrderUserDistributionGetV2InteractiveType = 'LIKE';
    public const COMMENT_StarReportOrderUserDistributionGetV2InteractiveType = 'COMMENT';
    public const COMPONENT_StarReportOrderUserDistributionGetV2InteractiveType = 'COMPONENT';

    public const ALLOWED_VALUES = [
        self::VV_StarReportOrderUserDistributionGetV2InteractiveType,
        self::SHARE_StarReportOrderUserDistributionGetV2InteractiveType,
        self::LIKE_StarReportOrderUserDistributionGetV2InteractiveType,
        self::COMMENT_StarReportOrderUserDistributionGetV2InteractiveType,
        self::COMPONENT_StarReportOrderUserDistributionGetV2InteractiveType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportOrderUserDistributionGetV2InteractiveType', $value));
        }
        return (string) $value;
    }
}
