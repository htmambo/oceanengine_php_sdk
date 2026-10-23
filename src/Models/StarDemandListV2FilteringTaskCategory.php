<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2FilteringTaskCategory
{
    public const DOUYIN_CHALLENGE_StarDemandListV2FilteringTaskCategory = 'DOUYIN_CHALLENGE';
    public const DOUYIN_LIVE_StarDemandListV2FilteringTaskCategory = 'DOUYIN_LIVE';
    public const DOUYIN_LIVE_CHALLENGE_StarDemandListV2FilteringTaskCategory = 'DOUYIN_LIVE_CHALLENGE';
    public const DOUYIN_LIVE_RECRUIT_StarDemandListV2FilteringTaskCategory = 'DOUYIN_LIVE_RECRUIT';
    public const DOUYIN_PIC_StarDemandListV2FilteringTaskCategory = 'DOUYIN_PIC';
    public const DOUYIN_PIC_CHALLENGE_StarDemandListV2FilteringTaskCategory = 'DOUYIN_PIC_CHALLENGE';
    public const DOUYIN_VIDEO_StarDemandListV2FilteringTaskCategory = 'DOUYIN_VIDEO';
    public const DOUYIN_VIDEO_RECRUIT_StarDemandListV2FilteringTaskCategory = 'DOUYIN_VIDEO_RECRUIT';

    public const ALLOWED_VALUES = [
        self::DOUYIN_CHALLENGE_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_LIVE_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_LIVE_CHALLENGE_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_LIVE_RECRUIT_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_PIC_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_PIC_CHALLENGE_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_VIDEO_StarDemandListV2FilteringTaskCategory,
        self::DOUYIN_VIDEO_RECRUIT_StarDemandListV2FilteringTaskCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2FilteringTaskCategory', $value));
        }
        return (string) $value;
    }
}
