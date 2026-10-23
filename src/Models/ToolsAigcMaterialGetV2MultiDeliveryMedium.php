<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAigcMaterialGetV2MultiDeliveryMedium
{
    public const ORANGE_AND_AWEME_ToolsAigcMaterialGetV2MultiDeliveryMedium = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_AND_AWEME_ToolsAigcMaterialGetV2MultiDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAigcMaterialGetV2MultiDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
