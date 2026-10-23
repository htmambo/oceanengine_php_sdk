<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusRtaGetInfoV30DataInterfaceDeliveryRange
{
    public const LOCAL_DouplusRtaGetInfoV30DataInterfaceDeliveryRange = 'LOCAL';
    public const UNION_DouplusRtaGetInfoV30DataInterfaceDeliveryRange = 'UNION';
    public const ALL_DouplusRtaGetInfoV30DataInterfaceDeliveryRange = 'ALL';

    public const ALLOWED_VALUES = [
        self::LOCAL_DouplusRtaGetInfoV30DataInterfaceDeliveryRange,
        self::UNION_DouplusRtaGetInfoV30DataInterfaceDeliveryRange,
        self::ALL_DouplusRtaGetInfoV30DataInterfaceDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusRtaGetInfoV30DataInterfaceDeliveryRange', $value));
        }
        return (string) $value;
    }
}
