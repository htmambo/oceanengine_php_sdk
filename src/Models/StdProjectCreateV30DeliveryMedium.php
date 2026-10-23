<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30DeliveryMedium
{
    public const APP_StdProjectCreateV30DeliveryMedium = 'APP';
    public const AWEME_StdProjectCreateV30DeliveryMedium = 'AWEME';
    public const BYTE_APP_StdProjectCreateV30DeliveryMedium = 'BYTE_APP';
    public const BYTE_GAME_StdProjectCreateV30DeliveryMedium = 'BYTE_GAME';
    public const ENTERPRISE_StdProjectCreateV30DeliveryMedium = 'ENTERPRISE';
    public const ORANGE_StdProjectCreateV30DeliveryMedium = 'ORANGE';
    public const QUICK_APP_StdProjectCreateV30DeliveryMedium = 'QUICK_APP';
    public const THIRDPARTY_StdProjectCreateV30DeliveryMedium = 'THIRDPARTY';
    public const WECHAT_APP_StdProjectCreateV30DeliveryMedium = 'WECHAT_APP';
    public const WECHAT_GAME_StdProjectCreateV30DeliveryMedium = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_StdProjectCreateV30DeliveryMedium,
        self::AWEME_StdProjectCreateV30DeliveryMedium,
        self::BYTE_APP_StdProjectCreateV30DeliveryMedium,
        self::BYTE_GAME_StdProjectCreateV30DeliveryMedium,
        self::ENTERPRISE_StdProjectCreateV30DeliveryMedium,
        self::ORANGE_StdProjectCreateV30DeliveryMedium,
        self::QUICK_APP_StdProjectCreateV30DeliveryMedium,
        self::THIRDPARTY_StdProjectCreateV30DeliveryMedium,
        self::WECHAT_APP_StdProjectCreateV30DeliveryMedium,
        self::WECHAT_GAME_StdProjectCreateV30DeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30DeliveryMedium', $value));
        }
        return (string) $value;
    }
}
