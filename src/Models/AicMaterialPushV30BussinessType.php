<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicMaterialPushV30BussinessType
{
    public const AD_AicMaterialPushV30BussinessType = 'AD';
    public const LOCAL_AicMaterialPushV30BussinessType = 'LOCAL';
    public const QIANCHUAN_AicMaterialPushV30BussinessType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_AicMaterialPushV30BussinessType,
        self::LOCAL_AicMaterialPushV30BussinessType,
        self::QIANCHUAN_AicMaterialPushV30BussinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicMaterialPushV30BussinessType', $value));
        }
        return (string) $value;
    }
}
