<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange
{
    public const ALL_SUBMITTED_ITEM_ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange = 'ALL_SUBMITTED_ITEM';
    public const CAN_DELIVERY_ITEM_ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange = 'CAN_DELIVERY_ITEM';

    public const ALLOWED_VALUES = [
        self::ALL_SUBMITTED_ITEM_ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange,
        self::CAN_DELIVERY_ITEM_ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskAuthorVedioGetV30StarTaskVideoRange', $value));
        }
        return (string) $value;
    }
}
