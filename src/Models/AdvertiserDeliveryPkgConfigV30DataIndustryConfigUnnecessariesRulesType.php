<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType
{
    public const CHOICE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType = 'CHOICE';
    public const COMPOSE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType = 'COMPOSE';

    public const ALLOWED_VALUES = [
        self::CHOICE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType,
        self::COMPOSE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryPkgConfigV30DataIndustryConfigUnnecessariesRulesType', $value));
        }
        return (string) $value;
    }
}
