<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportRubeexGetV2Order
{
    public const DESC_ReportRubeexGetV2Order = 'DESC';
    public const ASC_ReportRubeexGetV2Order = 'ASC';

    public const ALLOWED_VALUES = [
        self::DESC_ReportRubeexGetV2Order,
        self::ASC_ReportRubeexGetV2Order,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportRubeexGetV2Order', $value));
        }
        return (string) $value;
    }
}
