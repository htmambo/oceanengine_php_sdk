<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListDeliveryMedium
{
    public const APP_StdProjectListV30DataListDeliveryMedium = 'APP';
    public const AWEME_StdProjectListV30DataListDeliveryMedium = 'AWEME';
    public const BYTE_APP_StdProjectListV30DataListDeliveryMedium = 'BYTE_APP';
    public const BYTE_GAME_StdProjectListV30DataListDeliveryMedium = 'BYTE_GAME';
    public const ENTERPRISE_StdProjectListV30DataListDeliveryMedium = 'ENTERPRISE';
    public const ORANGE_StdProjectListV30DataListDeliveryMedium = 'ORANGE';
    public const QUICK_APP_StdProjectListV30DataListDeliveryMedium = 'QUICK_APP';
    public const THIRDPARTY_StdProjectListV30DataListDeliveryMedium = 'THIRDPARTY';
    public const WECHAT_APP_StdProjectListV30DataListDeliveryMedium = 'WECHAT_APP';
    public const WECHAT_GAME_StdProjectListV30DataListDeliveryMedium = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_StdProjectListV30DataListDeliveryMedium,
        self::AWEME_StdProjectListV30DataListDeliveryMedium,
        self::BYTE_APP_StdProjectListV30DataListDeliveryMedium,
        self::BYTE_GAME_StdProjectListV30DataListDeliveryMedium,
        self::ENTERPRISE_StdProjectListV30DataListDeliveryMedium,
        self::ORANGE_StdProjectListV30DataListDeliveryMedium,
        self::QUICK_APP_StdProjectListV30DataListDeliveryMedium,
        self::THIRDPARTY_StdProjectListV30DataListDeliveryMedium,
        self::WECHAT_APP_StdProjectListV30DataListDeliveryMedium,
        self::WECHAT_GAME_StdProjectListV30DataListDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
