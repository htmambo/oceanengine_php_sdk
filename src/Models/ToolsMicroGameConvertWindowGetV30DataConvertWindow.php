<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameConvertWindowGetV30DataConvertWindow
{
    public const FOURTEEN_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'FOURTEEN';
    public const NINETY_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'NINETY';
    public const ONE_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'ONE';
    public const ONE_HUNDRED_EIGHTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'ONE_HUNDRED_EIGHTY';
    public const PERMANENT_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'PERMANENT';
    public const SEVEN_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'SEVEN';
    public const SIXTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'SIXTY';
    public const THIRTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'THIRTY';
    public const THREE_ToolsMicroGameConvertWindowGetV30DataConvertWindow = 'THREE';

    public const ALLOWED_VALUES = [
        self::FOURTEEN_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::NINETY_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::ONE_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::ONE_HUNDRED_EIGHTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::PERMANENT_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::SEVEN_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::SIXTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::THIRTY_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
        self::THREE_ToolsMicroGameConvertWindowGetV30DataConvertWindow,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameConvertWindowGetV30DataConvertWindow', $value));
        }
        return (string) $value;
    }
}
