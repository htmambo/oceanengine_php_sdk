<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2DataListUniversalSettlementType
{
    public const ALL_StarDemandListV2DataListUniversalSettlementType = 'ALL';
    public const CPA_StarDemandListV2DataListUniversalSettlementType = 'CPA';
    public const CPM_StarDemandListV2DataListUniversalSettlementType = 'CPM';
    public const CUSTOMIZE_StarDemandListV2DataListUniversalSettlementType = 'CUSTOMIZE';
    public const DOU_PLUS_StarDemandListV2DataListUniversalSettlementType = 'DOU_PLUS';
    public const EFFECT_StarDemandListV2DataListUniversalSettlementType = 'EFFECT';
    public const EXCHANGE_StarDemandListV2DataListUniversalSettlementType = 'EXCHANGE';
    public const FIXED_PRICE_StarDemandListV2DataListUniversalSettlementType = 'FIXED_PRICE';
    public const FLOW_SHARE_StarDemandListV2DataListUniversalSettlementType = 'FLOW_SHARE';
    public const GIFT_StarDemandListV2DataListUniversalSettlementType = 'GIFT';
    public const MONEY_SHARE_StarDemandListV2DataListUniversalSettlementType = 'MONEY_SHARE';
    public const RANK_StarDemandListV2DataListUniversalSettlementType = 'RANK';
    public const STAR_SUPPORT_StarDemandListV2DataListUniversalSettlementType = 'STAR_SUPPORT';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandListV2DataListUniversalSettlementType,
        self::CPA_StarDemandListV2DataListUniversalSettlementType,
        self::CPM_StarDemandListV2DataListUniversalSettlementType,
        self::CUSTOMIZE_StarDemandListV2DataListUniversalSettlementType,
        self::DOU_PLUS_StarDemandListV2DataListUniversalSettlementType,
        self::EFFECT_StarDemandListV2DataListUniversalSettlementType,
        self::EXCHANGE_StarDemandListV2DataListUniversalSettlementType,
        self::FIXED_PRICE_StarDemandListV2DataListUniversalSettlementType,
        self::FLOW_SHARE_StarDemandListV2DataListUniversalSettlementType,
        self::GIFT_StarDemandListV2DataListUniversalSettlementType,
        self::MONEY_SHARE_StarDemandListV2DataListUniversalSettlementType,
        self::RANK_StarDemandListV2DataListUniversalSettlementType,
        self::STAR_SUPPORT_StarDemandListV2DataListUniversalSettlementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2DataListUniversalSettlementType', $value));
        }
        return (string) $value;
    }
}
