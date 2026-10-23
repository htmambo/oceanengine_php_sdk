<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryProduct
{
    public const APP_ProjectListV30DataListDeliveryProduct = 'APP';
    public const AWEME_ProjectListV30DataListDeliveryProduct = 'AWEME';
    public const BYTE_APP_ProjectListV30DataListDeliveryProduct = 'BYTE_APP';
    public const BYTE_GAME_ProjectListV30DataListDeliveryProduct = 'BYTE_GAME';
    public const NONE_ProjectListV30DataListDeliveryProduct = 'NONE';
    public const PRODUCT_ProjectListV30DataListDeliveryProduct = 'PRODUCT';
    public const QUICK_APP_ProjectListV30DataListDeliveryProduct = 'QUICK_APP';
    public const WECHAT_APP_ProjectListV30DataListDeliveryProduct = 'WECHAT_APP';
    public const WECHAT_GAME_ProjectListV30DataListDeliveryProduct = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_ProjectListV30DataListDeliveryProduct,
        self::AWEME_ProjectListV30DataListDeliveryProduct,
        self::BYTE_APP_ProjectListV30DataListDeliveryProduct,
        self::BYTE_GAME_ProjectListV30DataListDeliveryProduct,
        self::NONE_ProjectListV30DataListDeliveryProduct,
        self::PRODUCT_ProjectListV30DataListDeliveryProduct,
        self::QUICK_APP_ProjectListV30DataListDeliveryProduct,
        self::WECHAT_APP_ProjectListV30DataListDeliveryProduct,
        self::WECHAT_GAME_ProjectListV30DataListDeliveryProduct,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryProduct', $value));
        }
        return (string) $value;
    }
}
