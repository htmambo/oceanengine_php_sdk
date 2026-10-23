<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpVideoUpdateV30DataVideosStatusCode
{
    public const SUCCESS_ToolsEbpVideoUpdateV30DataVideosStatusCode = 'SUCCESS';
    public const FAILURE_ToolsEbpVideoUpdateV30DataVideosStatusCode = 'FAILURE';

    public const ALLOWED_VALUES = [
        self::SUCCESS_ToolsEbpVideoUpdateV30DataVideosStatusCode,
        self::FAILURE_ToolsEbpVideoUpdateV30DataVideosStatusCode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpVideoUpdateV30DataVideosStatusCode', $value));
        }
        return (string) $value;
    }
}
