<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListOrderLiveScene
{
    public const Enum_混合投放_DouplusOrderListV30DataOrderListOrderLiveScene = '混合投放';
    public const Enum_直推直播间_DouplusOrderListV30DataOrderListOrderLiveScene = '直推直播间';
    public const Enum_视频导流直播间_DouplusOrderListV30DataOrderListOrderLiveScene = '视频导流直播间';

    public const ALLOWED_VALUES = [
        self::Enum_混合投放_DouplusOrderListV30DataOrderListOrderLiveScene,
        self::Enum_直推直播间_DouplusOrderListV30DataOrderListOrderLiveScene,
        self::Enum_视频导流直播间_DouplusOrderListV30DataOrderListOrderLiveScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListOrderLiveScene', $value));
        }
        return (string) $value;
    }
}
