<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListLandingType
{
    public const APP_ProjectListV30DataListLandingType = 'APP';
    public const ARTICLE_ProjectListV30DataListLandingType = 'ARTICLE';
    public const BRAND_EXTERNAL_ProjectListV30DataListLandingType = 'BRAND_EXTERNAL';
    public const DPA_ProjectListV30DataListLandingType = 'DPA';
    public const GOODS_ProjectListV30DataListLandingType = 'GOODS';
    public const LINK_ProjectListV30DataListLandingType = 'LINK';
    public const LIVE_ProjectListV30DataListLandingType = 'LIVE';
    public const MICRO_GAME_ProjectListV30DataListLandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_ProjectListV30DataListLandingType = 'NATIVE_ACTION';
    public const QUICK_APP_ProjectListV30DataListLandingType = 'QUICK_APP';
    public const SHOP_ProjectListV30DataListLandingType = 'SHOP';
    public const STORE_ProjectListV30DataListLandingType = 'STORE';

    public const ALLOWED_VALUES = [
        self::APP_ProjectListV30DataListLandingType,
        self::ARTICLE_ProjectListV30DataListLandingType,
        self::BRAND_EXTERNAL_ProjectListV30DataListLandingType,
        self::DPA_ProjectListV30DataListLandingType,
        self::GOODS_ProjectListV30DataListLandingType,
        self::LINK_ProjectListV30DataListLandingType,
        self::LIVE_ProjectListV30DataListLandingType,
        self::MICRO_GAME_ProjectListV30DataListLandingType,
        self::NATIVE_ACTION_ProjectListV30DataListLandingType,
        self::QUICK_APP_ProjectListV30DataListLandingType,
        self::SHOP_ProjectListV30DataListLandingType,
        self::STORE_ProjectListV30DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListLandingType', $value));
        }
        return (string) $value;
    }
}
