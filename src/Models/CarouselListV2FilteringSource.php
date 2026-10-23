<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CarouselListV2FilteringSource
{
    public const ACCOUNT_PUSH_CarouselListV2FilteringSource = 'ACCOUNT_PUSH';
    public const AD_SITE_CarouselListV2FilteringSource = 'AD_SITE';
    public const AIC_CarouselListV2FilteringSource = 'AIC';
    public const BP_CarouselListV2FilteringSource = 'BP';
    public const CEWEBRITY_CAROUSEL_CarouselListV2FilteringSource = 'CEWEBRITY_CAROUSEL';
    public const OPEN_API_CarouselListV2FilteringSource = 'OPEN_API';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_PUSH_CarouselListV2FilteringSource,
        self::AD_SITE_CarouselListV2FilteringSource,
        self::AIC_CarouselListV2FilteringSource,
        self::BP_CarouselListV2FilteringSource,
        self::CEWEBRITY_CAROUSEL_CarouselListV2FilteringSource,
        self::OPEN_API_CarouselListV2FilteringSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CarouselListV2FilteringSource', $value));
        }
        return (string) $value;
    }
}
