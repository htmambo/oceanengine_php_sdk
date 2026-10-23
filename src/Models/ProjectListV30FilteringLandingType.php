<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringLandingType
{
    public const APP_ProjectListV30FilteringLandingType = 'APP';
    public const DPA_ProjectListV30FilteringLandingType = 'DPA';
    public const LINK_ProjectListV30FilteringLandingType = 'LINK';
    public const MICRO_GAME_ProjectListV30FilteringLandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_ProjectListV30FilteringLandingType = 'NATIVE_ACTION';
    public const QUICK_APP_ProjectListV30FilteringLandingType = 'QUICK_APP';
    public const SHOP_ProjectListV30FilteringLandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_ProjectListV30FilteringLandingType,
        self::DPA_ProjectListV30FilteringLandingType,
        self::LINK_ProjectListV30FilteringLandingType,
        self::MICRO_GAME_ProjectListV30FilteringLandingType,
        self::NATIVE_ACTION_ProjectListV30FilteringLandingType,
        self::QUICK_APP_ProjectListV30FilteringLandingType,
        self::SHOP_ProjectListV30FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
