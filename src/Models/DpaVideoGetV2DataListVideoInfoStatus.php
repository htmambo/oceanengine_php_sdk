<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaVideoGetV2DataListVideoInfoStatus
{
    public const AVAILABLE_DpaVideoGetV2DataListVideoInfoStatus = 'AVAILABLE';
    public const UNAVAILABLE_DpaVideoGetV2DataListVideoInfoStatus = 'UNAVAILABLE';

    public const ALLOWED_VALUES = [
        self::AVAILABLE_DpaVideoGetV2DataListVideoInfoStatus,
        self::UNAVAILABLE_DpaVideoGetV2DataListVideoInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaVideoGetV2DataListVideoInfoStatus', $value));
        }
        return (string) $value;
    }
}
