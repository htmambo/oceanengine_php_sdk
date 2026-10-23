<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2ActivateType
{
    public const ONE_MONTH_2_THREE_MONTH_ToolsBidSuggestV2ActivateType = 'ONE_MONTH_2_THREE_MONTH';
    public const THREE_MONTH_EAILIER_ToolsBidSuggestV2ActivateType = 'THREE_MONTH_EAILIER';
    public const UNLIMITED_ToolsBidSuggestV2ActivateType = 'UNLIMITED';
    public const WITH_IN_A_MONTH_ToolsBidSuggestV2ActivateType = 'WITH_IN_A_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_2_THREE_MONTH_ToolsBidSuggestV2ActivateType,
        self::THREE_MONTH_EAILIER_ToolsBidSuggestV2ActivateType,
        self::UNLIMITED_ToolsBidSuggestV2ActivateType,
        self::WITH_IN_A_MONTH_ToolsBidSuggestV2ActivateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2ActivateType', $value));
        }
        return (string) $value;
    }
}
