<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListMicroPromotionType
{
    public const AWEME_ProjectListV30DataListMicroPromotionType = 'AWEME';
    public const BYTE_APP_ProjectListV30DataListMicroPromotionType = 'BYTE_APP';
    public const BYTE_GAME_ProjectListV30DataListMicroPromotionType = 'BYTE_GAME';
    public const WECHAT_APP_ProjectListV30DataListMicroPromotionType = 'WECHAT_APP';
    public const WECHAT_GAME_ProjectListV30DataListMicroPromotionType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::AWEME_ProjectListV30DataListMicroPromotionType,
        self::BYTE_APP_ProjectListV30DataListMicroPromotionType,
        self::BYTE_GAME_ProjectListV30DataListMicroPromotionType,
        self::WECHAT_APP_ProjectListV30DataListMicroPromotionType,
        self::WECHAT_GAME_ProjectListV30DataListMicroPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListMicroPromotionType', $value));
        }
        return (string) $value;
    }
}
