<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ShopPlatform
{
    public const ALIBABA_StdProjectCreateV30ShopPlatform = 'ALIBABA';
    public const ALIMAMA_StdProjectCreateV30ShopPlatform = 'ALIMAMA';
    public const ALIPAY_StdProjectCreateV30ShopPlatform = 'ALIPAY';
    public const EASTBUY_StdProjectCreateV30ShopPlatform = 'EASTBUY';
    public const HELIANG_StdProjectCreateV30ShopPlatform = 'HELIANG';
    public const ITAORED_StdProjectCreateV30ShopPlatform = 'ITAORED';
    public const JD_StdProjectCreateV30ShopPlatform = 'JD';
    public const MEITUAN_StdProjectCreateV30ShopPlatform = 'MEITUAN';
    public const MIDEA_StdProjectCreateV30ShopPlatform = 'MIDEA';
    public const OTHER_StdProjectCreateV30ShopPlatform = 'OTHER';
    public const PAQUAPP_StdProjectCreateV30ShopPlatform = 'PAQUAPP';
    public const PDD_StdProjectCreateV30ShopPlatform = 'PDD';
    public const POIZON_StdProjectCreateV30ShopPlatform = 'POIZON';
    public const SUNING_StdProjectCreateV30ShopPlatform = 'SUNING';
    public const TB_StdProjectCreateV30ShopPlatform = 'TB';
    public const VIP_SHOP_StdProjectCreateV30ShopPlatform = 'VIP_SHOP';
    public const YIPINTEMIAN_StdProjectCreateV30ShopPlatform = 'YIPINTEMIAN';
    public const ZHENCHU_StdProjectCreateV30ShopPlatform = 'ZHENCHU';

    public const ALLOWED_VALUES = [
        self::ALIBABA_StdProjectCreateV30ShopPlatform,
        self::ALIMAMA_StdProjectCreateV30ShopPlatform,
        self::ALIPAY_StdProjectCreateV30ShopPlatform,
        self::EASTBUY_StdProjectCreateV30ShopPlatform,
        self::HELIANG_StdProjectCreateV30ShopPlatform,
        self::ITAORED_StdProjectCreateV30ShopPlatform,
        self::JD_StdProjectCreateV30ShopPlatform,
        self::MEITUAN_StdProjectCreateV30ShopPlatform,
        self::MIDEA_StdProjectCreateV30ShopPlatform,
        self::OTHER_StdProjectCreateV30ShopPlatform,
        self::PAQUAPP_StdProjectCreateV30ShopPlatform,
        self::PDD_StdProjectCreateV30ShopPlatform,
        self::POIZON_StdProjectCreateV30ShopPlatform,
        self::SUNING_StdProjectCreateV30ShopPlatform,
        self::TB_StdProjectCreateV30ShopPlatform,
        self::VIP_SHOP_StdProjectCreateV30ShopPlatform,
        self::YIPINTEMIAN_StdProjectCreateV30ShopPlatform,
        self::ZHENCHU_StdProjectCreateV30ShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ShopPlatform', $value));
        }
        return (string) $value;
    }
}
