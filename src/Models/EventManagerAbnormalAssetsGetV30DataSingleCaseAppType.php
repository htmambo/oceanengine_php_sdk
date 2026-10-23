<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAbnormalAssetsGetV30DataSingleCaseAppType
{
    public const ANDROID_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType = 'ANDROID';
    public const IOS_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType = 'IOS';
    public const HARMONY_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType = 'HARMONY';

    public const ALLOWED_VALUES = [
        self::ANDROID_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType,
        self::IOS_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType,
        self::HARMONY_EventManagerAbnormalAssetsGetV30DataSingleCaseAppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAbnormalAssetsGetV30DataSingleCaseAppType', $value));
        }
        return (string) $value;
    }
}
