<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DcdChargeSubmitV30Platform
{
    public const AD_DcdChargeSubmitV30Platform = 'AD';
    public const DOU_JIA_DcdChargeSubmitV30Platform = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_DcdChargeSubmitV30Platform = 'DOU_JIA_UPGRADE';

    public const ALLOWED_VALUES = [
        self::AD_DcdChargeSubmitV30Platform,
        self::DOU_JIA_DcdChargeSubmitV30Platform,
        self::DOU_JIA_UPGRADE_DcdChargeSubmitV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DcdChargeSubmitV30Platform', $value));
        }
        return (string) $value;
    }
}
