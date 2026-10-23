<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserListV2DataAccountListAccountType
{
    public const AD_NORMAL_EbpAdvertiserListV2DataAccountListAccountType = 'AD_NORMAL';
    public const DOU_PLUS_EbpAdvertiserListV2DataAccountListAccountType = 'DOU_PLUS';
    public const LOCAL_EbpAdvertiserListV2DataAccountListAccountType = 'LOCAL';
    public const QIANCHUAN_EbpAdvertiserListV2DataAccountListAccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_NORMAL_EbpAdvertiserListV2DataAccountListAccountType,
        self::DOU_PLUS_EbpAdvertiserListV2DataAccountListAccountType,
        self::LOCAL_EbpAdvertiserListV2DataAccountListAccountType,
        self::QIANCHUAN_EbpAdvertiserListV2DataAccountListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserListV2DataAccountListAccountType', $value));
        }
        return (string) $value;
    }
}
