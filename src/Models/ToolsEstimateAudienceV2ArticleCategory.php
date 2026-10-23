<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2ArticleCategory
{
    public const MOVIE_ToolsEstimateAudienceV2ArticleCategory = 'MOVIE';
    public const GRADUATES_ToolsEstimateAudienceV2ArticleCategory = 'GRADUATES';
    public const FINANCE_ToolsEstimateAudienceV2ArticleCategory = 'FINANCE';
    public const MILITARY_ToolsEstimateAudienceV2ArticleCategory = 'MILITARY';
    public const PARENTING_ToolsEstimateAudienceV2ArticleCategory = 'PARENTING';
    public const SPORTS_ToolsEstimateAudienceV2ArticleCategory = 'SPORTS';
    public const ENTERTAINMENT_ToolsEstimateAudienceV2ArticleCategory = 'ENTERTAINMENT';
    public const TRAVEL_ToolsEstimateAudienceV2ArticleCategory = 'TRAVEL';
    public const ANIMATION_ToolsEstimateAudienceV2ArticleCategory = 'ANIMATION';
    public const SOCIETY_ToolsEstimateAudienceV2ArticleCategory = 'SOCIETY';
    public const GAMES_ToolsEstimateAudienceV2ArticleCategory = 'GAMES';
    public const LAWS_ToolsEstimateAudienceV2ArticleCategory = 'LAWS';
    public const REGIMEN_ToolsEstimateAudienceV2ArticleCategory = 'REGIMEN';
    public const DIGITAL_ToolsEstimateAudienceV2ArticleCategory = 'DIGITAL';
    public const FREAK_ToolsEstimateAudienceV2ArticleCategory = 'FREAK';
    public const BUSINESS_ToolsEstimateAudienceV2ArticleCategory = 'BUSINESS';
    public const COMICS_ToolsEstimateAudienceV2ArticleCategory = 'COMICS';
    public const TECHNOLOGY_ToolsEstimateAudienceV2ArticleCategory = 'TECHNOLOGY';
    public const EXPLORE_ToolsEstimateAudienceV2ArticleCategory = 'EXPLORE';
    public const AMUSEMENT_ToolsEstimateAudienceV2ArticleCategory = 'AMUSEMENT';
    public const INTERNATIONAL_ToolsEstimateAudienceV2ArticleCategory = 'INTERNATIONAL';
    public const SCIENCE_ToolsEstimateAudienceV2ArticleCategory = 'SCIENCE';
    public const HEALTH_ToolsEstimateAudienceV2ArticleCategory = 'HEALTH';
    public const WEIGHT_LOSING_ToolsEstimateAudienceV2ArticleCategory = 'WEIGHT_LOSING';
    public const DESIGN_ToolsEstimateAudienceV2ArticleCategory = 'DESIGN';
    public const PETS_ToolsEstimateAudienceV2ArticleCategory = 'PETS';
    public const GOVERNMENT_ToolsEstimateAudienceV2ArticleCategory = 'GOVERNMENT';
    public const TIPS_ToolsEstimateAudienceV2ArticleCategory = 'TIPS';
    public const WORKPLACE_ToolsEstimateAudienceV2ArticleCategory = 'WORKPLACE';
    public const ESTATE_ToolsEstimateAudienceV2ArticleCategory = 'ESTATE';
    public const RUMOR_CRACKER_ToolsEstimateAudienceV2ArticleCategory = 'RUMOR_CRACKER';
    public const PHOTOGRAPHY_ToolsEstimateAudienceV2ArticleCategory = 'PHOTOGRAPHY';
    public const COLLECTION_ToolsEstimateAudienceV2ArticleCategory = 'COLLECTION';
    public const LOCAL_ToolsEstimateAudienceV2ArticleCategory = 'LOCAL';
    public const EDUCATION_ToolsEstimateAudienceV2ArticleCategory = 'EDUCATION';
    public const EMOTION_ToolsEstimateAudienceV2ArticleCategory = 'EMOTION';
    public const ESSAY_ToolsEstimateAudienceV2ArticleCategory = 'ESSAY';
    public const CULTURE_ToolsEstimateAudienceV2ArticleCategory = 'CULTURE';
    public const GOURMET_ToolsEstimateAudienceV2ArticleCategory = 'GOURMET';
    public const HOME_ToolsEstimateAudienceV2ArticleCategory = 'HOME';
    public const FASHION_ToolsEstimateAudienceV2ArticleCategory = 'FASHION';
    public const HISTORY_ToolsEstimateAudienceV2ArticleCategory = 'HISTORY';
    public const CONSTELLATION_ToolsEstimateAudienceV2ArticleCategory = 'CONSTELLATION';
    public const CARS_ToolsEstimateAudienceV2ArticleCategory = 'CARS';
    public const STORIES_ToolsEstimateAudienceV2ArticleCategory = 'STORIES';

    public const ALLOWED_VALUES = [
        self::MOVIE_ToolsEstimateAudienceV2ArticleCategory,
        self::GRADUATES_ToolsEstimateAudienceV2ArticleCategory,
        self::FINANCE_ToolsEstimateAudienceV2ArticleCategory,
        self::MILITARY_ToolsEstimateAudienceV2ArticleCategory,
        self::PARENTING_ToolsEstimateAudienceV2ArticleCategory,
        self::SPORTS_ToolsEstimateAudienceV2ArticleCategory,
        self::ENTERTAINMENT_ToolsEstimateAudienceV2ArticleCategory,
        self::TRAVEL_ToolsEstimateAudienceV2ArticleCategory,
        self::ANIMATION_ToolsEstimateAudienceV2ArticleCategory,
        self::SOCIETY_ToolsEstimateAudienceV2ArticleCategory,
        self::GAMES_ToolsEstimateAudienceV2ArticleCategory,
        self::LAWS_ToolsEstimateAudienceV2ArticleCategory,
        self::REGIMEN_ToolsEstimateAudienceV2ArticleCategory,
        self::DIGITAL_ToolsEstimateAudienceV2ArticleCategory,
        self::FREAK_ToolsEstimateAudienceV2ArticleCategory,
        self::BUSINESS_ToolsEstimateAudienceV2ArticleCategory,
        self::COMICS_ToolsEstimateAudienceV2ArticleCategory,
        self::TECHNOLOGY_ToolsEstimateAudienceV2ArticleCategory,
        self::EXPLORE_ToolsEstimateAudienceV2ArticleCategory,
        self::AMUSEMENT_ToolsEstimateAudienceV2ArticleCategory,
        self::INTERNATIONAL_ToolsEstimateAudienceV2ArticleCategory,
        self::SCIENCE_ToolsEstimateAudienceV2ArticleCategory,
        self::HEALTH_ToolsEstimateAudienceV2ArticleCategory,
        self::WEIGHT_LOSING_ToolsEstimateAudienceV2ArticleCategory,
        self::DESIGN_ToolsEstimateAudienceV2ArticleCategory,
        self::PETS_ToolsEstimateAudienceV2ArticleCategory,
        self::GOVERNMENT_ToolsEstimateAudienceV2ArticleCategory,
        self::TIPS_ToolsEstimateAudienceV2ArticleCategory,
        self::WORKPLACE_ToolsEstimateAudienceV2ArticleCategory,
        self::ESTATE_ToolsEstimateAudienceV2ArticleCategory,
        self::RUMOR_CRACKER_ToolsEstimateAudienceV2ArticleCategory,
        self::PHOTOGRAPHY_ToolsEstimateAudienceV2ArticleCategory,
        self::COLLECTION_ToolsEstimateAudienceV2ArticleCategory,
        self::LOCAL_ToolsEstimateAudienceV2ArticleCategory,
        self::EDUCATION_ToolsEstimateAudienceV2ArticleCategory,
        self::EMOTION_ToolsEstimateAudienceV2ArticleCategory,
        self::ESSAY_ToolsEstimateAudienceV2ArticleCategory,
        self::CULTURE_ToolsEstimateAudienceV2ArticleCategory,
        self::GOURMET_ToolsEstimateAudienceV2ArticleCategory,
        self::HOME_ToolsEstimateAudienceV2ArticleCategory,
        self::FASHION_ToolsEstimateAudienceV2ArticleCategory,
        self::HISTORY_ToolsEstimateAudienceV2ArticleCategory,
        self::CONSTELLATION_ToolsEstimateAudienceV2ArticleCategory,
        self::CARS_ToolsEstimateAudienceV2ArticleCategory,
        self::STORIES_ToolsEstimateAudienceV2ArticleCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2ArticleCategory', $value));
        }
        return (string) $value;
    }
}
