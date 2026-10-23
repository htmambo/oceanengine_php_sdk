<?php

/**
 * 本文件由 go2php 生成，源: api_tools_estimate_audience_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口你可以查询计划的受众条件，预估其在今日头条、抖音短视频、火山小视频和西瓜视频中的覆盖用户量，当受众预估的结果低于3万时，建议重新设置受众选项。
 */
class ApiOpenApi2ToolsEstimateAudienceGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $ac = null;
    private ?array $actionCategories = null;
    private ?\Oceanengine\Models\ToolsEstimateAudienceV2ActionDays $actionDays = null;
    private ?array $actionWords = null;
    private ?array $activateType = null;
    private ?array $adTag = null;
    private ?int $advertiserId = null;
    private ?array $age = null;
    private ?string $androidOsv = null;
    private ?string $appBehaviorTarget = null;
    private ?array $appCategory = null;
    private ?array $appIds = null;
    private ?array $articleCategory = null;
    private ?int $audiencePackageId = null;
    private ?\Oceanengine\Models\ToolsEstimateAudienceV2AutoExtendEnabled $autoExtendEnabled = null;
    private ?array $autoExtendTargets = null;
    private ?array $awemeFansNumbers = null;
    private ?array $carrier = null;
    private ?array $city = null;
    private ?array $deviceBrand = null;
    private ?array $deviceType = null;
    private ?string $district = null;
    private ?\Oceanengine\Models\ToolsEstimateAudienceV2DpaLocalAudience $dpaLocalAudience = null;
    private ?array $excludeCustomActions = null;
    private ?array $excludeFlowPackage = null;
    private ?\Oceanengine\Models\ToolsEstimateAudienceV2FilterAwemeAbnormalActive $filterAwemeAbnormalActive = null;
    private ?int $filterAwemeFansCount = null;
    private ?\Oceanengine\Models\ToolsEstimateAudienceV2FilterOwnAwemeFans $filterOwnAwemeFans = null;
    private ?array $flowPackage = null;
    private ?string $gender = null;
    private ?array $geolocation = null;
    private ?array $includeCustomActions = null;
    private ?string $interestActionMode = null;
    private ?array $interestCategories = null;
    private ?array $interestTags = null;
    private ?array $interestWords = null;
    private ?string $iosOsv = null;
    private ?array $launchPrice = null;
    private ?string $locationType = null;
    private ?array $platform = null;
    private ?array $retargetingTags = null;
    private ?array $retargetingTagsExclude = null;
    private ?array $retargetingTagsInclude = null;
    private ?string $retargetingType = null;
    private ?string $superiorPopularityType = null;
    private ?array $userType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEstimateAudienceV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ac(array $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    public function actionCategories(array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    public function actionDays(\Oceanengine\Models\ToolsEstimateAudienceV2ActionDays $actionDays): self
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    public function actionWords(array $actionWords): self
    {
        $this->actionWords = $actionWords;
        return $this;
    }

    public function activateType(array $activateType): self
    {
        $this->activateType = $activateType;
        return $this;
    }

    public function adTag(array $adTag): self
    {
        $this->adTag = $adTag;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function age(array $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function androidOsv(string $androidOsv): self
    {
        $this->androidOsv = $androidOsv;
        return $this;
    }

    public function appBehaviorTarget(string $appBehaviorTarget): self
    {
        $this->appBehaviorTarget = $appBehaviorTarget;
        return $this;
    }

    public function appCategory(array $appCategory): self
    {
        $this->appCategory = $appCategory;
        return $this;
    }

    public function appIds(array $appIds): self
    {
        $this->appIds = $appIds;
        return $this;
    }

    public function articleCategory(array $articleCategory): self
    {
        $this->articleCategory = $articleCategory;
        return $this;
    }

    public function audiencePackageId(int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    public function autoExtendEnabled(\Oceanengine\Models\ToolsEstimateAudienceV2AutoExtendEnabled $autoExtendEnabled): self
    {
        $this->autoExtendEnabled = $autoExtendEnabled;
        return $this;
    }

    public function autoExtendTargets(array $autoExtendTargets): self
    {
        $this->autoExtendTargets = $autoExtendTargets;
        return $this;
    }

    public function awemeFansNumbers(array $awemeFansNumbers): self
    {
        $this->awemeFansNumbers = $awemeFansNumbers;
        return $this;
    }

    public function carrier(array $carrier): self
    {
        $this->carrier = $carrier;
        return $this;
    }

    public function city(array $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function deviceBrand(array $deviceBrand): self
    {
        $this->deviceBrand = $deviceBrand;
        return $this;
    }

    public function deviceType(array $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    public function district(string $district): self
    {
        $this->district = $district;
        return $this;
    }

    public function dpaLocalAudience(\Oceanengine\Models\ToolsEstimateAudienceV2DpaLocalAudience $dpaLocalAudience): self
    {
        $this->dpaLocalAudience = $dpaLocalAudience;
        return $this;
    }

    public function excludeCustomActions(array $excludeCustomActions): self
    {
        $this->excludeCustomActions = $excludeCustomActions;
        return $this;
    }

    public function excludeFlowPackage(array $excludeFlowPackage): self
    {
        $this->excludeFlowPackage = $excludeFlowPackage;
        return $this;
    }

    public function filterAwemeAbnormalActive(\Oceanengine\Models\ToolsEstimateAudienceV2FilterAwemeAbnormalActive $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    public function filterAwemeFansCount(int $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    public function filterOwnAwemeFans(\Oceanengine\Models\ToolsEstimateAudienceV2FilterOwnAwemeFans $filterOwnAwemeFans): self
    {
        $this->filterOwnAwemeFans = $filterOwnAwemeFans;
        return $this;
    }

    public function flowPackage(array $flowPackage): self
    {
        $this->flowPackage = $flowPackage;
        return $this;
    }

    public function gender(string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function geolocation(array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    public function includeCustomActions(array $includeCustomActions): self
    {
        $this->includeCustomActions = $includeCustomActions;
        return $this;
    }

    public function interestActionMode(string $interestActionMode): self
    {
        $this->interestActionMode = $interestActionMode;
        return $this;
    }

    public function interestCategories(array $interestCategories): self
    {
        $this->interestCategories = $interestCategories;
        return $this;
    }

    public function interestTags(array $interestTags): self
    {
        $this->interestTags = $interestTags;
        return $this;
    }

    public function interestWords(array $interestWords): self
    {
        $this->interestWords = $interestWords;
        return $this;
    }

    public function iosOsv(string $iosOsv): self
    {
        $this->iosOsv = $iosOsv;
        return $this;
    }

    public function launchPrice(array $launchPrice): self
    {
        $this->launchPrice = $launchPrice;
        return $this;
    }

    public function locationType(string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    public function platform(array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function retargetingTags(array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    public function retargetingTagsExclude(array $retargetingTagsExclude): self
    {
        $this->retargetingTagsExclude = $retargetingTagsExclude;
        return $this;
    }

    public function retargetingTagsInclude(array $retargetingTagsInclude): self
    {
        $this->retargetingTagsInclude = $retargetingTagsInclude;
        return $this;
    }

    public function retargetingType(string $retargetingType): self
    {
        $this->retargetingType = $retargetingType;
        return $this;
    }

    public function superiorPopularityType(string $superiorPopularityType): self
    {
        $this->superiorPopularityType = $superiorPopularityType;
        return $this;
    }

    public function userType(array $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 通过此接口你可以查询计划的受众条件，预估其在今日头条、抖音短视频、火山小视频和西瓜视频中的覆盖用户量，当受众预估的结果低于3万时，建议重新设置受众选项。
     */
    public function execute(): \Oceanengine\Models\ToolsEstimateAudienceV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->ac !== null) {
            $queryParams['ac'] = $this->ac;
        }
        if ($this->actionCategories !== null) {
            $queryParams['action_categories'] = $this->actionCategories;
        }
        if ($this->actionDays !== null) {
            $__encoded0 = json_encode($this->actionDays);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: actionDays');
            }
            $queryParams['action_days'] = $__encoded0;
        }
        if ($this->actionWords !== null) {
            $queryParams['action_words'] = $this->actionWords;
        }
        if ($this->activateType !== null) {
            $queryParams['activate_type'] = $this->activateType;
        }
        if ($this->adTag !== null) {
            $queryParams['ad_tag'] = $this->adTag;
        }
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->age !== null) {
            $queryParams['age'] = $this->age;
        }
        if ($this->androidOsv !== null) {
            $queryParams['android_osv'] = $this->androidOsv;
        }
        if ($this->appBehaviorTarget !== null) {
            $queryParams['app_behavior_target'] = $this->appBehaviorTarget;
        }
        if ($this->appCategory !== null) {
            $queryParams['app_category'] = $this->appCategory;
        }
        if ($this->appIds !== null) {
            $queryParams['app_ids'] = $this->appIds;
        }
        if ($this->articleCategory !== null) {
            $queryParams['article_category'] = $this->articleCategory;
        }
        if ($this->audiencePackageId !== null) {
            $queryParams['audience_package_id'] = $this->audiencePackageId;
        }
        if ($this->autoExtendEnabled !== null) {
            $__encoded1 = json_encode($this->autoExtendEnabled);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: autoExtendEnabled');
            }
            $queryParams['auto_extend_enabled'] = $__encoded1;
        }
        if ($this->autoExtendTargets !== null) {
            $queryParams['auto_extend_targets'] = $this->autoExtendTargets;
        }
        if ($this->awemeFansNumbers !== null) {
            $queryParams['aweme_fans_numbers'] = $this->awemeFansNumbers;
        }
        if ($this->carrier !== null) {
            $queryParams['carrier'] = $this->carrier;
        }
        if ($this->city !== null) {
            $queryParams['city'] = $this->city;
        }
        if ($this->deviceBrand !== null) {
            $queryParams['device_brand'] = $this->deviceBrand;
        }
        if ($this->deviceType !== null) {
            $queryParams['device_type'] = $this->deviceType;
        }
        if ($this->district !== null) {
            $queryParams['district'] = $this->district;
        }
        if ($this->dpaLocalAudience !== null) {
            $__encoded2 = json_encode($this->dpaLocalAudience);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: dpaLocalAudience');
            }
            $queryParams['dpa_local_audience'] = $__encoded2;
        }
        if ($this->excludeCustomActions !== null) {
            $__encoded3 = json_encode($this->excludeCustomActions);
            if ($__encoded3 === false) {
                throw new \RuntimeException('Failed to encode parameter: excludeCustomActions');
            }
            $queryParams['exclude_custom_actions'] = $__encoded3;
        }
        if ($this->excludeFlowPackage !== null) {
            $queryParams['exclude_flow_package'] = $this->excludeFlowPackage;
        }
        if ($this->filterAwemeAbnormalActive !== null) {
            $__encoded4 = json_encode($this->filterAwemeAbnormalActive);
            if ($__encoded4 === false) {
                throw new \RuntimeException('Failed to encode parameter: filterAwemeAbnormalActive');
            }
            $queryParams['filter_aweme_abnormal_active'] = $__encoded4;
        }
        if ($this->filterAwemeFansCount !== null) {
            $queryParams['filter_aweme_fans_count'] = $this->filterAwemeFansCount;
        }
        if ($this->filterOwnAwemeFans !== null) {
            $__encoded5 = json_encode($this->filterOwnAwemeFans);
            if ($__encoded5 === false) {
                throw new \RuntimeException('Failed to encode parameter: filterOwnAwemeFans');
            }
            $queryParams['filter_own_aweme_fans'] = $__encoded5;
        }
        if ($this->flowPackage !== null) {
            $queryParams['flow_package'] = $this->flowPackage;
        }
        if ($this->gender !== null) {
            $queryParams['gender'] = $this->gender;
        }
        if ($this->geolocation !== null) {
            $__encoded6 = json_encode($this->geolocation);
            if ($__encoded6 === false) {
                throw new \RuntimeException('Failed to encode parameter: geolocation');
            }
            $queryParams['geolocation'] = $__encoded6;
        }
        if ($this->includeCustomActions !== null) {
            $__encoded7 = json_encode($this->includeCustomActions);
            if ($__encoded7 === false) {
                throw new \RuntimeException('Failed to encode parameter: includeCustomActions');
            }
            $queryParams['include_custom_actions'] = $__encoded7;
        }
        if ($this->interestActionMode !== null) {
            $queryParams['interest_action_mode'] = $this->interestActionMode;
        }
        if ($this->interestCategories !== null) {
            $queryParams['interest_categories'] = $this->interestCategories;
        }
        if ($this->interestTags !== null) {
            $queryParams['interest_tags'] = $this->interestTags;
        }
        if ($this->interestWords !== null) {
            $queryParams['interest_words'] = $this->interestWords;
        }
        if ($this->iosOsv !== null) {
            $queryParams['ios_osv'] = $this->iosOsv;
        }
        if ($this->launchPrice !== null) {
            $queryParams['launch_price'] = $this->launchPrice;
        }
        if ($this->locationType !== null) {
            $queryParams['location_type'] = $this->locationType;
        }
        if ($this->platform !== null) {
            $queryParams['platform'] = $this->platform;
        }
        if ($this->retargetingTags !== null) {
            $queryParams['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->retargetingTagsExclude !== null) {
            $queryParams['retargeting_tags_exclude'] = $this->retargetingTagsExclude;
        }
        if ($this->retargetingTagsInclude !== null) {
            $queryParams['retargeting_tags_include'] = $this->retargetingTagsInclude;
        }
        if ($this->retargetingType !== null) {
            $queryParams['retargeting_type'] = $this->retargetingType;
        }
        if ($this->superiorPopularityType !== null) {
            $queryParams['superior_popularity_type'] = $this->superiorPopularityType;
        }
        if ($this->userType !== null) {
            $queryParams['user_type'] = $this->userType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/estimate_audience/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEstimateAudienceV2Response::class);

        return $result['model'];
    }
}
