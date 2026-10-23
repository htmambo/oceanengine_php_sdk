<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryMedium
{
    public const APP_ProjectListV30DataListDeliveryMedium = 'APP';
    public const AWEME_ProjectListV30DataListDeliveryMedium = 'AWEME';
    public const BYTE_APP_ProjectListV30DataListDeliveryMedium = 'BYTE_APP';
    public const BYTE_GAME_ProjectListV30DataListDeliveryMedium = 'BYTE_GAME';
    public const ENTERPRISE_ProjectListV30DataListDeliveryMedium = 'ENTERPRISE';
    public const LANDING_PAGE_LINK_ProjectListV30DataListDeliveryMedium = 'LANDING_PAGE_LINK';
    public const ORANGE_ProjectListV30DataListDeliveryMedium = 'ORANGE';
    public const PRODUCT_ProjectListV30DataListDeliveryMedium = 'PRODUCT';
    public const QUICK_APP_ProjectListV30DataListDeliveryMedium = 'QUICK_APP';
    public const THIRDPARTY_ProjectListV30DataListDeliveryMedium = 'THIRDPARTY';
    public const WECHAT_APP_ProjectListV30DataListDeliveryMedium = 'WECHAT_APP';
    public const WECHAT_GAME_ProjectListV30DataListDeliveryMedium = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_ProjectListV30DataListDeliveryMedium,
        self::AWEME_ProjectListV30DataListDeliveryMedium,
        self::BYTE_APP_ProjectListV30DataListDeliveryMedium,
        self::BYTE_GAME_ProjectListV30DataListDeliveryMedium,
        self::ENTERPRISE_ProjectListV30DataListDeliveryMedium,
        self::LANDING_PAGE_LINK_ProjectListV30DataListDeliveryMedium,
        self::ORANGE_ProjectListV30DataListDeliveryMedium,
        self::PRODUCT_ProjectListV30DataListDeliveryMedium,
        self::QUICK_APP_ProjectListV30DataListDeliveryMedium,
        self::THIRDPARTY_ProjectListV30DataListDeliveryMedium,
        self::WECHAT_APP_ProjectListV30DataListDeliveryMedium,
        self::WECHAT_GAME_ProjectListV30DataListDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
