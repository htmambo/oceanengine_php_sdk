<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameConvertWindowUpdateV30ConvertWindow
{
    public const FOURTEEN_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'FOURTEEN';
    public const NINETY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'NINETY';
    public const ONE_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'ONE';
    public const ONE_HUNDRED_EIGHTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'ONE_HUNDRED_EIGHTY';
    public const PERMANENT_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'PERMANENT';
    public const SEVEN_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'SEVEN';
    public const SIXTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'SIXTY';
    public const THIRTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'THIRTY';
    public const THREE_ToolsMicroGameConvertWindowUpdateV30ConvertWindow = 'THREE';

    public const ALLOWED_VALUES = [
        self::FOURTEEN_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::NINETY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::ONE_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::ONE_HUNDRED_EIGHTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::PERMANENT_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::SEVEN_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::SIXTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::THIRTY_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
        self::THREE_ToolsMicroGameConvertWindowUpdateV30ConvertWindow,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameConvertWindowUpdateV30ConvertWindow', $value));
        }
        return (string) $value;
    }
}
