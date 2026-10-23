<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2DataListTaskCategory
{
    public const DOUYIN_CHALLENGE_StarDemandListV2DataListTaskCategory = 'DOUYIN_CHALLENGE';
    public const DOUYIN_LIVE_StarDemandListV2DataListTaskCategory = 'DOUYIN_LIVE';
    public const DOUYIN_LIVE_CHALLENGE_StarDemandListV2DataListTaskCategory = 'DOUYIN_LIVE_CHALLENGE';
    public const DOUYIN_LIVE_RECRUIT_StarDemandListV2DataListTaskCategory = 'DOUYIN_LIVE_RECRUIT';
    public const DOUYIN_PIC_StarDemandListV2DataListTaskCategory = 'DOUYIN_PIC';
    public const DOUYIN_PIC_CHALLENGE_StarDemandListV2DataListTaskCategory = 'DOUYIN_PIC_CHALLENGE';
    public const DOUYIN_VIDEO_StarDemandListV2DataListTaskCategory = 'DOUYIN_VIDEO';
    public const DOUYIN_VIDEO_RECRUIT_StarDemandListV2DataListTaskCategory = 'DOUYIN_VIDEO_RECRUIT';

    public const ALLOWED_VALUES = [
        self::DOUYIN_CHALLENGE_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_LIVE_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_LIVE_CHALLENGE_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_LIVE_RECRUIT_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_PIC_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_PIC_CHALLENGE_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_VIDEO_StarDemandListV2DataListTaskCategory,
        self::DOUYIN_VIDEO_RECRUIT_StarDemandListV2DataListTaskCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2DataListTaskCategory', $value));
        }
        return (string) $value;
    }
}
