<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange
{
    public const LOCAL_ONLY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange = 'LOCAL_ONLY';
    public const UNION_ONLY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange = 'UNION_ONLY';
    public const UNIVERSAL_DELIVERY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange = 'UNIVERSAL_DELIVERY';

    public const ALLOWED_VALUES = [
        self::LOCAL_ONLY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange,
        self::UNION_ONLY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange,
        self::UNIVERSAL_DELIVERY_ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaGetInfoV2DataInterfaceInfoDeliveryRange', $value));
        }
        return (string) $value;
    }
}
