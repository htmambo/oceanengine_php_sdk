<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceActivateType
{
    public const ONE_MONTH_2_THREE_MONTH_AdGetV2DataAudienceActivateType = 'ONE_MONTH_2_THREE_MONTH';
    public const THREE_MONTH_EAILIER_AdGetV2DataAudienceActivateType = 'THREE_MONTH_EAILIER';
    public const UNLIMITED_AdGetV2DataAudienceActivateType = 'UNLIMITED';
    public const WITH_IN_A_MONTH_AdGetV2DataAudienceActivateType = 'WITH_IN_A_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_2_THREE_MONTH_AdGetV2DataAudienceActivateType,
        self::THREE_MONTH_EAILIER_AdGetV2DataAudienceActivateType,
        self::UNLIMITED_AdGetV2DataAudienceActivateType,
        self::WITH_IN_A_MONTH_AdGetV2DataAudienceActivateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceActivateType', $value));
        }
        return (string) $value;
    }
}
