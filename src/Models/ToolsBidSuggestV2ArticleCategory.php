<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2ArticleCategory
{
    public const MOVIE_ToolsBidSuggestV2ArticleCategory = 'MOVIE';
    public const GRADUATES_ToolsBidSuggestV2ArticleCategory = 'GRADUATES';
    public const FINANCE_ToolsBidSuggestV2ArticleCategory = 'FINANCE';
    public const MILITARY_ToolsBidSuggestV2ArticleCategory = 'MILITARY';
    public const PARENTING_ToolsBidSuggestV2ArticleCategory = 'PARENTING';
    public const SPORTS_ToolsBidSuggestV2ArticleCategory = 'SPORTS';
    public const ENTERTAINMENT_ToolsBidSuggestV2ArticleCategory = 'ENTERTAINMENT';
    public const TRAVEL_ToolsBidSuggestV2ArticleCategory = 'TRAVEL';
    public const ANIMATION_ToolsBidSuggestV2ArticleCategory = 'ANIMATION';
    public const SOCIETY_ToolsBidSuggestV2ArticleCategory = 'SOCIETY';
    public const GAMES_ToolsBidSuggestV2ArticleCategory = 'GAMES';
    public const LAWS_ToolsBidSuggestV2ArticleCategory = 'LAWS';
    public const REGIMEN_ToolsBidSuggestV2ArticleCategory = 'REGIMEN';
    public const DIGITAL_ToolsBidSuggestV2ArticleCategory = 'DIGITAL';
    public const FREAK_ToolsBidSuggestV2ArticleCategory = 'FREAK';
    public const BUSINESS_ToolsBidSuggestV2ArticleCategory = 'BUSINESS';
    public const COMICS_ToolsBidSuggestV2ArticleCategory = 'COMICS';
    public const TECHNOLOGY_ToolsBidSuggestV2ArticleCategory = 'TECHNOLOGY';
    public const EXPLORE_ToolsBidSuggestV2ArticleCategory = 'EXPLORE';
    public const AMUSEMENT_ToolsBidSuggestV2ArticleCategory = 'AMUSEMENT';
    public const INTERNATIONAL_ToolsBidSuggestV2ArticleCategory = 'INTERNATIONAL';
    public const SCIENCE_ToolsBidSuggestV2ArticleCategory = 'SCIENCE';
    public const HEALTH_ToolsBidSuggestV2ArticleCategory = 'HEALTH';
    public const WEIGHT_LOSING_ToolsBidSuggestV2ArticleCategory = 'WEIGHT_LOSING';
    public const DESIGN_ToolsBidSuggestV2ArticleCategory = 'DESIGN';
    public const PETS_ToolsBidSuggestV2ArticleCategory = 'PETS';
    public const GOVERNMENT_ToolsBidSuggestV2ArticleCategory = 'GOVERNMENT';
    public const TIPS_ToolsBidSuggestV2ArticleCategory = 'TIPS';
    public const WORKPLACE_ToolsBidSuggestV2ArticleCategory = 'WORKPLACE';
    public const ESTATE_ToolsBidSuggestV2ArticleCategory = 'ESTATE';
    public const RUMOR_CRACKER_ToolsBidSuggestV2ArticleCategory = 'RUMOR_CRACKER';
    public const PHOTOGRAPHY_ToolsBidSuggestV2ArticleCategory = 'PHOTOGRAPHY';
    public const COLLECTION_ToolsBidSuggestV2ArticleCategory = 'COLLECTION';
    public const LOCAL_ToolsBidSuggestV2ArticleCategory = 'LOCAL';
    public const EDUCATION_ToolsBidSuggestV2ArticleCategory = 'EDUCATION';
    public const EMOTION_ToolsBidSuggestV2ArticleCategory = 'EMOTION';
    public const ESSAY_ToolsBidSuggestV2ArticleCategory = 'ESSAY';
    public const CULTURE_ToolsBidSuggestV2ArticleCategory = 'CULTURE';
    public const GOURMET_ToolsBidSuggestV2ArticleCategory = 'GOURMET';
    public const HOME_ToolsBidSuggestV2ArticleCategory = 'HOME';
    public const FASHION_ToolsBidSuggestV2ArticleCategory = 'FASHION';
    public const HISTORY_ToolsBidSuggestV2ArticleCategory = 'HISTORY';
    public const CONSTELLATION_ToolsBidSuggestV2ArticleCategory = 'CONSTELLATION';
    public const CARS_ToolsBidSuggestV2ArticleCategory = 'CARS';
    public const STORIES_ToolsBidSuggestV2ArticleCategory = 'STORIES';

    public const ALLOWED_VALUES = [
        self::MOVIE_ToolsBidSuggestV2ArticleCategory,
        self::GRADUATES_ToolsBidSuggestV2ArticleCategory,
        self::FINANCE_ToolsBidSuggestV2ArticleCategory,
        self::MILITARY_ToolsBidSuggestV2ArticleCategory,
        self::PARENTING_ToolsBidSuggestV2ArticleCategory,
        self::SPORTS_ToolsBidSuggestV2ArticleCategory,
        self::ENTERTAINMENT_ToolsBidSuggestV2ArticleCategory,
        self::TRAVEL_ToolsBidSuggestV2ArticleCategory,
        self::ANIMATION_ToolsBidSuggestV2ArticleCategory,
        self::SOCIETY_ToolsBidSuggestV2ArticleCategory,
        self::GAMES_ToolsBidSuggestV2ArticleCategory,
        self::LAWS_ToolsBidSuggestV2ArticleCategory,
        self::REGIMEN_ToolsBidSuggestV2ArticleCategory,
        self::DIGITAL_ToolsBidSuggestV2ArticleCategory,
        self::FREAK_ToolsBidSuggestV2ArticleCategory,
        self::BUSINESS_ToolsBidSuggestV2ArticleCategory,
        self::COMICS_ToolsBidSuggestV2ArticleCategory,
        self::TECHNOLOGY_ToolsBidSuggestV2ArticleCategory,
        self::EXPLORE_ToolsBidSuggestV2ArticleCategory,
        self::AMUSEMENT_ToolsBidSuggestV2ArticleCategory,
        self::INTERNATIONAL_ToolsBidSuggestV2ArticleCategory,
        self::SCIENCE_ToolsBidSuggestV2ArticleCategory,
        self::HEALTH_ToolsBidSuggestV2ArticleCategory,
        self::WEIGHT_LOSING_ToolsBidSuggestV2ArticleCategory,
        self::DESIGN_ToolsBidSuggestV2ArticleCategory,
        self::PETS_ToolsBidSuggestV2ArticleCategory,
        self::GOVERNMENT_ToolsBidSuggestV2ArticleCategory,
        self::TIPS_ToolsBidSuggestV2ArticleCategory,
        self::WORKPLACE_ToolsBidSuggestV2ArticleCategory,
        self::ESTATE_ToolsBidSuggestV2ArticleCategory,
        self::RUMOR_CRACKER_ToolsBidSuggestV2ArticleCategory,
        self::PHOTOGRAPHY_ToolsBidSuggestV2ArticleCategory,
        self::COLLECTION_ToolsBidSuggestV2ArticleCategory,
        self::LOCAL_ToolsBidSuggestV2ArticleCategory,
        self::EDUCATION_ToolsBidSuggestV2ArticleCategory,
        self::EMOTION_ToolsBidSuggestV2ArticleCategory,
        self::ESSAY_ToolsBidSuggestV2ArticleCategory,
        self::CULTURE_ToolsBidSuggestV2ArticleCategory,
        self::GOURMET_ToolsBidSuggestV2ArticleCategory,
        self::HOME_ToolsBidSuggestV2ArticleCategory,
        self::FASHION_ToolsBidSuggestV2ArticleCategory,
        self::HISTORY_ToolsBidSuggestV2ArticleCategory,
        self::CONSTELLATION_ToolsBidSuggestV2ArticleCategory,
        self::CARS_ToolsBidSuggestV2ArticleCategory,
        self::STORIES_ToolsBidSuggestV2ArticleCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2ArticleCategory', $value));
        }
        return (string) $value;
    }
}
