<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType
{
    public const CHOICE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType = 'CHOICE';
    public const COMPOSE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType = 'COMPOSE';

    public const ALLOWED_VALUES = [
        self::CHOICE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType,
        self::COMPOSE_AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryPkgConfigV30DataIndustryConfigNecessariesRulesType', $value));
        }
        return (string) $value;
    }
}
