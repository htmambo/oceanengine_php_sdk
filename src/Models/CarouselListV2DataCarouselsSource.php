<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CarouselListV2DataCarouselsSource
{
    public const ACCOUNT_PUSH_CarouselListV2DataCarouselsSource = 'ACCOUNT_PUSH';
    public const AD_SITE_CarouselListV2DataCarouselsSource = 'AD_SITE';
    public const AIC_CarouselListV2DataCarouselsSource = 'AIC';
    public const BP_CarouselListV2DataCarouselsSource = 'BP';
    public const CEWEBRITY_CAROUSEL_CarouselListV2DataCarouselsSource = 'CEWEBRITY_CAROUSEL';
    public const OPEN_API_CarouselListV2DataCarouselsSource = 'OPEN_API';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_PUSH_CarouselListV2DataCarouselsSource,
        self::AD_SITE_CarouselListV2DataCarouselsSource,
        self::AIC_CarouselListV2DataCarouselsSource,
        self::BP_CarouselListV2DataCarouselsSource,
        self::CEWEBRITY_CAROUSEL_CarouselListV2DataCarouselsSource,
        self::OPEN_API_CarouselListV2DataCarouselsSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CarouselListV2DataCarouselsSource', $value));
        }
        return (string) $value;
    }
}
