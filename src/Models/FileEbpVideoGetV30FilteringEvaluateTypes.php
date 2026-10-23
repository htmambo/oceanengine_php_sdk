<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileEbpVideoGetV30FilteringEvaluateTypes
{
    public const FIRST_PUBLISH_FileEbpVideoGetV30FilteringEvaluateTypes = 'FIRST_PUBLISH';
    public const HIGH_QUALITY_FileEbpVideoGetV30FilteringEvaluateTypes = 'HIGH_QUALITY';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_FileEbpVideoGetV30FilteringEvaluateTypes,
        self::HIGH_QUALITY_FileEbpVideoGetV30FilteringEvaluateTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileEbpVideoGetV30FilteringEvaluateTypes', $value));
        }
        return (string) $value;
    }
}
