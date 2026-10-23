<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListShopPlatform
{
    public const ALIBABA_StdProjectListV30DataListShopPlatform = 'ALIBABA';
    public const ALIMAMA_StdProjectListV30DataListShopPlatform = 'ALIMAMA';
    public const ALIPAY_StdProjectListV30DataListShopPlatform = 'ALIPAY';
    public const EASTBUY_StdProjectListV30DataListShopPlatform = 'EASTBUY';
    public const HELIANG_StdProjectListV30DataListShopPlatform = 'HELIANG';
    public const ITAORED_StdProjectListV30DataListShopPlatform = 'ITAORED';
    public const JD_StdProjectListV30DataListShopPlatform = 'JD';
    public const MEITUAN_StdProjectListV30DataListShopPlatform = 'MEITUAN';
    public const MIDEA_StdProjectListV30DataListShopPlatform = 'MIDEA';
    public const OTHER_StdProjectListV30DataListShopPlatform = 'OTHER';
    public const PAQUAPP_StdProjectListV30DataListShopPlatform = 'PAQUAPP';
    public const PDD_StdProjectListV30DataListShopPlatform = 'PDD';
    public const POIZON_StdProjectListV30DataListShopPlatform = 'POIZON';
    public const SUNING_StdProjectListV30DataListShopPlatform = 'SUNING';
    public const TB_StdProjectListV30DataListShopPlatform = 'TB';
    public const VIP_SHOP_StdProjectListV30DataListShopPlatform = 'VIP_SHOP';
    public const YIPINTEMIAN_StdProjectListV30DataListShopPlatform = 'YIPINTEMIAN';
    public const ZHENCHU_StdProjectListV30DataListShopPlatform = 'ZHENCHU';

    public const ALLOWED_VALUES = [
        self::ALIBABA_StdProjectListV30DataListShopPlatform,
        self::ALIMAMA_StdProjectListV30DataListShopPlatform,
        self::ALIPAY_StdProjectListV30DataListShopPlatform,
        self::EASTBUY_StdProjectListV30DataListShopPlatform,
        self::HELIANG_StdProjectListV30DataListShopPlatform,
        self::ITAORED_StdProjectListV30DataListShopPlatform,
        self::JD_StdProjectListV30DataListShopPlatform,
        self::MEITUAN_StdProjectListV30DataListShopPlatform,
        self::MIDEA_StdProjectListV30DataListShopPlatform,
        self::OTHER_StdProjectListV30DataListShopPlatform,
        self::PAQUAPP_StdProjectListV30DataListShopPlatform,
        self::PDD_StdProjectListV30DataListShopPlatform,
        self::POIZON_StdProjectListV30DataListShopPlatform,
        self::SUNING_StdProjectListV30DataListShopPlatform,
        self::TB_StdProjectListV30DataListShopPlatform,
        self::VIP_SHOP_StdProjectListV30DataListShopPlatform,
        self::YIPINTEMIAN_StdProjectListV30DataListShopPlatform,
        self::ZHENCHU_StdProjectListV30DataListShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListShopPlatform', $value));
        }
        return (string) $value;
    }
}
