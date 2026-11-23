<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceArticleCategory
{
    public const PETS_AdGetV2DataAudienceArticleCategory = 'PETS';
    public const FREAK_AdGetV2DataAudienceArticleCategory = 'FREAK';
    public const ESTATE_AdGetV2DataAudienceArticleCategory = 'ESTATE';
    public const CONSTELLATION_AdGetV2DataAudienceArticleCategory = 'CONSTELLATION';
    public const GRADUATES_AdGetV2DataAudienceArticleCategory = 'GRADUATES';
    public const REGIMEN_AdGetV2DataAudienceArticleCategory = 'REGIMEN';
    public const DIGITAL_AdGetV2DataAudienceArticleCategory = 'DIGITAL';
    public const ANIMATION_AdGetV2DataAudienceArticleCategory = 'ANIMATION';
    public const GOVERNMENT_AdGetV2DataAudienceArticleCategory = 'GOVERNMENT';
    public const HEALTH_AdGetV2DataAudienceArticleCategory = 'HEALTH';
    public const DESIGN_AdGetV2DataAudienceArticleCategory = 'DESIGN';
    public const PHOTOGRAPHY_AdGetV2DataAudienceArticleCategory = 'PHOTOGRAPHY';
    public const GAMES_AdGetV2DataAudienceArticleCategory = 'GAMES';
    public const EXPLORE_AdGetV2DataAudienceArticleCategory = 'EXPLORE';
    public const TRAVEL_AdGetV2DataAudienceArticleCategory = 'TRAVEL';
    public const STORIES_AdGetV2DataAudienceArticleCategory = 'STORIES';
    public const MOVIE_AdGetV2DataAudienceArticleCategory = 'MOVIE';
    public const TECHNOLOGY_AdGetV2DataAudienceArticleCategory = 'TECHNOLOGY';
    public const LAWS_AdGetV2DataAudienceArticleCategory = 'LAWS';
    public const EMOTION_AdGetV2DataAudienceArticleCategory = 'EMOTION';
    public const ENTERTAINMENT_AdGetV2DataAudienceArticleCategory = 'ENTERTAINMENT';
    public const HOME_AdGetV2DataAudienceArticleCategory = 'HOME';
    public const HISTORY_AdGetV2DataAudienceArticleCategory = 'HISTORY';
    public const CARS_AdGetV2DataAudienceArticleCategory = 'CARS';
    public const MILITARY_AdGetV2DataAudienceArticleCategory = 'MILITARY';
    public const LOCAL_AdGetV2DataAudienceArticleCategory = 'LOCAL';
    public const CULTURE_AdGetV2DataAudienceArticleCategory = 'CULTURE';
    public const SPORTS_AdGetV2DataAudienceArticleCategory = 'SPORTS';
    public const GOURMET_AdGetV2DataAudienceArticleCategory = 'GOURMET';
    public const ESSAY_AdGetV2DataAudienceArticleCategory = 'ESSAY';
    public const TIPS_AdGetV2DataAudienceArticleCategory = 'TIPS';
    public const RUMOR_CRACKER_AdGetV2DataAudienceArticleCategory = 'RUMOR_CRACKER';
    public const INTERNATIONAL_AdGetV2DataAudienceArticleCategory = 'INTERNATIONAL';
    public const EDUCATION_AdGetV2DataAudienceArticleCategory = 'EDUCATION';
    public const SCIENCE_AdGetV2DataAudienceArticleCategory = 'SCIENCE';
    public const COLLECTION_AdGetV2DataAudienceArticleCategory = 'COLLECTION';
    public const WORKPLACE_AdGetV2DataAudienceArticleCategory = 'WORKPLACE';
    public const FASHION_AdGetV2DataAudienceArticleCategory = 'FASHION';
    public const PARENTING_AdGetV2DataAudienceArticleCategory = 'PARENTING';
    public const AMUSEMENT_AdGetV2DataAudienceArticleCategory = 'AMUSEMENT';
    public const WEIGHT_LOSING_AdGetV2DataAudienceArticleCategory = 'WEIGHT_LOSING';
    public const FINANCE_AdGetV2DataAudienceArticleCategory = 'FINANCE';
    public const BUSINESS_AdGetV2DataAudienceArticleCategory = 'BUSINESS';
    public const COMICS_AdGetV2DataAudienceArticleCategory = 'COMICS';
    public const SOCIETY_AdGetV2DataAudienceArticleCategory = 'SOCIETY';

    public const ALLOWED_VALUES = [
        self::PETS_AdGetV2DataAudienceArticleCategory,
        self::FREAK_AdGetV2DataAudienceArticleCategory,
        self::ESTATE_AdGetV2DataAudienceArticleCategory,
        self::CONSTELLATION_AdGetV2DataAudienceArticleCategory,
        self::GRADUATES_AdGetV2DataAudienceArticleCategory,
        self::REGIMEN_AdGetV2DataAudienceArticleCategory,
        self::DIGITAL_AdGetV2DataAudienceArticleCategory,
        self::ANIMATION_AdGetV2DataAudienceArticleCategory,
        self::GOVERNMENT_AdGetV2DataAudienceArticleCategory,
        self::HEALTH_AdGetV2DataAudienceArticleCategory,
        self::DESIGN_AdGetV2DataAudienceArticleCategory,
        self::PHOTOGRAPHY_AdGetV2DataAudienceArticleCategory,
        self::GAMES_AdGetV2DataAudienceArticleCategory,
        self::EXPLORE_AdGetV2DataAudienceArticleCategory,
        self::TRAVEL_AdGetV2DataAudienceArticleCategory,
        self::STORIES_AdGetV2DataAudienceArticleCategory,
        self::MOVIE_AdGetV2DataAudienceArticleCategory,
        self::TECHNOLOGY_AdGetV2DataAudienceArticleCategory,
        self::LAWS_AdGetV2DataAudienceArticleCategory,
        self::EMOTION_AdGetV2DataAudienceArticleCategory,
        self::ENTERTAINMENT_AdGetV2DataAudienceArticleCategory,
        self::HOME_AdGetV2DataAudienceArticleCategory,
        self::HISTORY_AdGetV2DataAudienceArticleCategory,
        self::CARS_AdGetV2DataAudienceArticleCategory,
        self::MILITARY_AdGetV2DataAudienceArticleCategory,
        self::LOCAL_AdGetV2DataAudienceArticleCategory,
        self::CULTURE_AdGetV2DataAudienceArticleCategory,
        self::SPORTS_AdGetV2DataAudienceArticleCategory,
        self::GOURMET_AdGetV2DataAudienceArticleCategory,
        self::ESSAY_AdGetV2DataAudienceArticleCategory,
        self::TIPS_AdGetV2DataAudienceArticleCategory,
        self::RUMOR_CRACKER_AdGetV2DataAudienceArticleCategory,
        self::INTERNATIONAL_AdGetV2DataAudienceArticleCategory,
        self::EDUCATION_AdGetV2DataAudienceArticleCategory,
        self::SCIENCE_AdGetV2DataAudienceArticleCategory,
        self::COLLECTION_AdGetV2DataAudienceArticleCategory,
        self::WORKPLACE_AdGetV2DataAudienceArticleCategory,
        self::FASHION_AdGetV2DataAudienceArticleCategory,
        self::PARENTING_AdGetV2DataAudienceArticleCategory,
        self::AMUSEMENT_AdGetV2DataAudienceArticleCategory,
        self::WEIGHT_LOSING_AdGetV2DataAudienceArticleCategory,
        self::FINANCE_AdGetV2DataAudienceArticleCategory,
        self::BUSINESS_AdGetV2DataAudienceArticleCategory,
        self::COMICS_AdGetV2DataAudienceArticleCategory,
        self::SOCIETY_AdGetV2DataAudienceArticleCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceArticleCategory', $value));
        }
        return (string) $value;
    }
}
