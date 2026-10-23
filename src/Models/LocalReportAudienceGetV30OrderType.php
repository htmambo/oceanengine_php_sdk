<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30OrderType
{
    public const ASC_LocalReportAudienceGetV30OrderType = 'ASC';
    public const DESC_LocalReportAudienceGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_LocalReportAudienceGetV30OrderType,
        self::DESC_LocalReportAudienceGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
