<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaProductAvailablesV2DataListProductIndustry
{
    public const AUTO_NEW_DpaProductAvailablesV2DataListProductIndustry = 'AUTO_NEW';
    public const AUTO_OLD_DpaProductAvailablesV2DataListProductIndustry = 'AUTO_OLD';
    public const BASE_HOUSE_DpaProductAvailablesV2DataListProductIndustry = 'BASE_HOUSE';
    public const BEAUTYSALON_DpaProductAvailablesV2DataListProductIndustry = 'BEAUTYSALON';
    public const COMMUNICATION_DpaProductAvailablesV2DataListProductIndustry = 'COMMUNICATION';
    public const COMPREHENSIVESHOOT_DpaProductAvailablesV2DataListProductIndustry = 'COMPREHENSIVESHOOT';
    public const CREDIT_DpaProductAvailablesV2DataListProductIndustry = 'CREDIT';
    public const ECOMMERCE_DpaProductAvailablesV2DataListProductIndustry = 'ECOMMERCE';
    public const ECOMMERCE_V2_DpaProductAvailablesV2DataListProductIndustry = 'ECOMMERCE_V2';
    public const EDUCATION_DpaProductAvailablesV2DataListProductIndustry = 'EDUCATION';
    public const ESTATE_DpaProductAvailablesV2DataListProductIndustry = 'ESTATE';
    public const FAMILYSHOOT_DpaProductAvailablesV2DataListProductIndustry = 'FAMILYSHOOT';
    public const FINANCE_DpaProductAvailablesV2DataListProductIndustry = 'FINANCE';
    public const FURNITURE_DpaProductAvailablesV2DataListProductIndustry = 'FURNITURE';
    public const GAME_DpaProductAvailablesV2DataListProductIndustry = 'GAME';
    public const GENERAL_DpaProductAvailablesV2DataListProductIndustry = 'GENERAL';
    public const HEALTHPRODUCTS_DpaProductAvailablesV2DataListProductIndustry = 'HEALTHPRODUCTS';
    public const HOME_DpaProductAvailablesV2DataListProductIndustry = 'HOME';
    public const IAAPLAYLET_DpaProductAvailablesV2DataListProductIndustry = 'IAAPLAYLET';
    public const INVESTMENTPROMOTION_DpaProductAvailablesV2DataListProductIndustry = 'INVESTMENTPROMOTION';
    public const JOBS_DpaProductAvailablesV2DataListProductIndustry = 'JOBS';
    public const LARGELOANS_DpaProductAvailablesV2DataListProductIndustry = 'LARGELOANS';
    public const LAW_DpaProductAvailablesV2DataListProductIndustry = 'LAW';
    public const LIVE_DpaProductAvailablesV2DataListProductIndustry = 'LIVE';
    public const LOCALSHOOT_DpaProductAvailablesV2DataListProductIndustry = 'LOCALSHOOT';
    public const MEDICAL_SERVICE_DpaProductAvailablesV2DataListProductIndustry = 'MEDICAL_SERVICE';
    public const MEDICINE_DpaProductAvailablesV2DataListProductIndustry = 'MEDICINE';
    public const MERCHANTS_DpaProductAvailablesV2DataListProductIndustry = 'MERCHANTS';
    public const NEW_HOUSE_DpaProductAvailablesV2DataListProductIndustry = 'NEW_HOUSE';
    public const NOVEL_DpaProductAvailablesV2DataListProductIndustry = 'NOVEL';
    public const OTHER_DpaProductAvailablesV2DataListProductIndustry = 'OTHER';
    public const PLAYLET_DpaProductAvailablesV2DataListProductIndustry = 'PLAYLET';
    public const RECRUITMENT_DpaProductAvailablesV2DataListProductIndustry = 'RECRUITMENT';
    public const SHORTANDANIMEPLAY_DpaProductAvailablesV2DataListProductIndustry = 'SHORTANDANIMEPLAY';
    public const SPECIALMAKEUP_DpaProductAvailablesV2DataListProductIndustry = 'SPECIALMAKEUP';
    public const TOUR_HOTEL_DpaProductAvailablesV2DataListProductIndustry = 'TOUR_HOTEL';
    public const TOUR_ROUTE_DpaProductAvailablesV2DataListProductIndustry = 'TOUR_ROUTE';
    public const TOUR_TICKET_DpaProductAvailablesV2DataListProductIndustry = 'TOUR_TICKET';
    public const TRANSPORT_TICKET_DpaProductAvailablesV2DataListProductIndustry = 'TRANSPORT_TICKET';
    public const TRAVELSHOOT_DpaProductAvailablesV2DataListProductIndustry = 'TRAVELSHOOT';
    public const VIDEO_DpaProductAvailablesV2DataListProductIndustry = 'VIDEO';
    public const WEALTH_DpaProductAvailablesV2DataListProductIndustry = 'WEALTH';

    public const ALLOWED_VALUES = [
        self::AUTO_NEW_DpaProductAvailablesV2DataListProductIndustry,
        self::AUTO_OLD_DpaProductAvailablesV2DataListProductIndustry,
        self::BASE_HOUSE_DpaProductAvailablesV2DataListProductIndustry,
        self::BEAUTYSALON_DpaProductAvailablesV2DataListProductIndustry,
        self::COMMUNICATION_DpaProductAvailablesV2DataListProductIndustry,
        self::COMPREHENSIVESHOOT_DpaProductAvailablesV2DataListProductIndustry,
        self::CREDIT_DpaProductAvailablesV2DataListProductIndustry,
        self::ECOMMERCE_DpaProductAvailablesV2DataListProductIndustry,
        self::ECOMMERCE_V2_DpaProductAvailablesV2DataListProductIndustry,
        self::EDUCATION_DpaProductAvailablesV2DataListProductIndustry,
        self::ESTATE_DpaProductAvailablesV2DataListProductIndustry,
        self::FAMILYSHOOT_DpaProductAvailablesV2DataListProductIndustry,
        self::FINANCE_DpaProductAvailablesV2DataListProductIndustry,
        self::FURNITURE_DpaProductAvailablesV2DataListProductIndustry,
        self::GAME_DpaProductAvailablesV2DataListProductIndustry,
        self::GENERAL_DpaProductAvailablesV2DataListProductIndustry,
        self::HEALTHPRODUCTS_DpaProductAvailablesV2DataListProductIndustry,
        self::HOME_DpaProductAvailablesV2DataListProductIndustry,
        self::IAAPLAYLET_DpaProductAvailablesV2DataListProductIndustry,
        self::INVESTMENTPROMOTION_DpaProductAvailablesV2DataListProductIndustry,
        self::JOBS_DpaProductAvailablesV2DataListProductIndustry,
        self::LARGELOANS_DpaProductAvailablesV2DataListProductIndustry,
        self::LAW_DpaProductAvailablesV2DataListProductIndustry,
        self::LIVE_DpaProductAvailablesV2DataListProductIndustry,
        self::LOCALSHOOT_DpaProductAvailablesV2DataListProductIndustry,
        self::MEDICAL_SERVICE_DpaProductAvailablesV2DataListProductIndustry,
        self::MEDICINE_DpaProductAvailablesV2DataListProductIndustry,
        self::MERCHANTS_DpaProductAvailablesV2DataListProductIndustry,
        self::NEW_HOUSE_DpaProductAvailablesV2DataListProductIndustry,
        self::NOVEL_DpaProductAvailablesV2DataListProductIndustry,
        self::OTHER_DpaProductAvailablesV2DataListProductIndustry,
        self::PLAYLET_DpaProductAvailablesV2DataListProductIndustry,
        self::RECRUITMENT_DpaProductAvailablesV2DataListProductIndustry,
        self::SHORTANDANIMEPLAY_DpaProductAvailablesV2DataListProductIndustry,
        self::SPECIALMAKEUP_DpaProductAvailablesV2DataListProductIndustry,
        self::TOUR_HOTEL_DpaProductAvailablesV2DataListProductIndustry,
        self::TOUR_ROUTE_DpaProductAvailablesV2DataListProductIndustry,
        self::TOUR_TICKET_DpaProductAvailablesV2DataListProductIndustry,
        self::TRANSPORT_TICKET_DpaProductAvailablesV2DataListProductIndustry,
        self::TRAVELSHOOT_DpaProductAvailablesV2DataListProductIndustry,
        self::VIDEO_DpaProductAvailablesV2DataListProductIndustry,
        self::WEALTH_DpaProductAvailablesV2DataListProductIndustry,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaProductAvailablesV2DataListProductIndustry', $value));
        }
        return (string) $value;
    }
}
