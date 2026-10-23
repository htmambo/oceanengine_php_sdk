<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange
{
    public const LOCAL_ONLY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange = 'LOCAL_ONLY';
    public const UNION_ONLY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange = 'UNION_ONLY';
    public const UNIVERSAL_DELIVERY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange = 'UNIVERSAL_DELIVERY';

    public const ALLOWED_VALUES = [
        self::LOCAL_ONLY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange,
        self::UNION_ONLY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange,
        self::UNIVERSAL_DELIVERY_ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaGetInfoTmpV2DataInterfaceInfoDeliveryRange', $value));
        }
        return (string) $value;
    }
}
