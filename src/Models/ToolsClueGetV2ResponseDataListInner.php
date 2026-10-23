<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adId = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var string
     */
    protected ?string $address = null;

    /**
     * @var string
     */
    protected ?string $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * @var int
     */
    protected ?int $age = null;

    /**
     * @var int
     */
    protected ?int $allocationStatus = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string
     */
    protected ?string $cityName = null;

    /**
     * @var string
     */
    protected ?string $clueId = null;

    /**
     * @var string
     */
    protected ?string $clueOwnerName = null;

    /**
     * @var string
     */
    protected ?string $clueReturnStatus = null;

    /**
     * @var int
     */
    protected ?int $clueSource = null;

    /**
     * @var int
     */
    protected ?int $clueState = null;

    /**
     * @var string
     */
    protected ?string $clueStateName = null;

    /**
     * @var int
     */
    protected ?int $clueType = null;

    /**
     * @var string
     */
    protected ?string $convertStatus = null;

    /**
     * @var string
     */
    protected ?string $countryName = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $createTimeDetail = null;

    /**
     * @var string
     */
    protected ?string $creativeId = null;

    /**
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var string
     */
    protected ?string $email = null;

    /**
     * @var string
     */
    protected ?string $extInfo = null;

    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $extraInfo = null;

    /**
     * @var string
     */
    protected ?string $followStateName = null;

    /**
     * @var string
     */
    protected ?string $formRemark = null;

    /**
     * @var int
     */
    protected ?int $gender = null;

    /**
     * @var string
     */
    protected ?string $intentionEstimation = null;

    /**
     * @var string
     */
    protected ?string $location = null;

    /**
     * @var string
     */
    protected ?string $midInfo = null;

    /**
     * @var string
     */
    protected ?string $moduleId = null;

    /**
     * @var string
     */
    protected ?string $moduleName = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $projectId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * @var string
     */
    protected ?string $qq = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $remarkDict = null;

    /**
     * @var string
     */
    protected ?string $reqId = null;

    /**
     * @var string
     */
    protected ?string $searchBidWord = null;

    /**
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * @var string
     */
    protected ?string $siteName = null;

    /**
     * @var \Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore
     */
    protected ?\Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore $store = null;

    /**
     * @var string[]
     */
    protected ?array $systemTags = null;

    /**
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * @var string
     */
    protected ?string $telephone = null;

    /**
     * @var string
     */
    protected ?string $telephoneAddress = null;

    /**
     * @var string
     */
    protected ?string $weixin = null;

    /**
     * @return string
     */
    public function getAdId(): ?string
    {
        return $this->adId;
    }

    /**
     * @param string $adId
     * @return self
     */
    public function setAdId(?string $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertiserId(): ?string
    {
        return $this->advertiserId;
    }

    /**
     * @param string $advertiserId
     * @return self
     */
    public function setAdvertiserId(?string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return self
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return int
     */
    public function getAllocationStatus(): ?int
    {
        return $this->allocationStatus;
    }

    /**
     * @param int $allocationStatus
     * @return self
     */
    public function setAllocationStatus(?int $allocationStatus): self
    {
        $this->allocationStatus = $allocationStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClueId(): ?string
    {
        return $this->clueId;
    }

    /**
     * @param string $clueId
     * @return self
     */
    public function setClueId(?string $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClueOwnerName(): ?string
    {
        return $this->clueOwnerName;
    }

    /**
     * @param string $clueOwnerName
     * @return self
     */
    public function setClueOwnerName(?string $clueOwnerName): self
    {
        $this->clueOwnerName = $clueOwnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClueReturnStatus(): ?string
    {
        return $this->clueReturnStatus;
    }

    /**
     * @param string $clueReturnStatus
     * @return self
     */
    public function setClueReturnStatus(?string $clueReturnStatus): self
    {
        $this->clueReturnStatus = $clueReturnStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueSource(): ?int
    {
        return $this->clueSource;
    }

    /**
     * @param int $clueSource
     * @return self
     */
    public function setClueSource(?int $clueSource): self
    {
        $this->clueSource = $clueSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueState(): ?int
    {
        return $this->clueState;
    }

    /**
     * @param int $clueState
     * @return self
     */
    public function setClueState(?int $clueState): self
    {
        $this->clueState = $clueState;
        return $this;
    }

    /**
     * @return string
     */
    public function getClueStateName(): ?string
    {
        return $this->clueStateName;
    }

    /**
     * @param string $clueStateName
     * @return self
     */
    public function setClueStateName(?string $clueStateName): self
    {
        $this->clueStateName = $clueStateName;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueType(): ?int
    {
        return $this->clueType;
    }

    /**
     * @param int $clueType
     * @return self
     */
    public function setClueType(?int $clueType): self
    {
        $this->clueType = $clueType;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertStatus(): ?string
    {
        return $this->convertStatus;
    }

    /**
     * @param string $convertStatus
     * @return self
     */
    public function setConvertStatus(?string $convertStatus): self
    {
        $this->convertStatus = $convertStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return self
     */
    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTimeDetail(): ?string
    {
        return $this->createTimeDetail;
    }

    /**
     * @param string $createTimeDetail
     * @return self
     */
    public function setCreateTimeDetail(?string $createTimeDetail): self
    {
        $this->createTimeDetail = $createTimeDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeId(): ?string
    {
        return $this->creativeId;
    }

    /**
     * @param string $creativeId
     * @return self
     */
    public function setCreativeId(?string $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtInfo(): ?string
    {
        return $this->extInfo;
    }

    /**
     * @param string $extInfo
     * @return self
     */
    public function setExtInfo(?string $extInfo): self
    {
        $this->extInfo = $extInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getExtraInfo(): ?array
    {
        return $this->extraInfo;
    }

    /**
     * @param array<string,mixed> $extraInfo
     * @return self
     */
    public function setExtraInfo(?array $extraInfo): self
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFollowStateName(): ?string
    {
        return $this->followStateName;
    }

    /**
     * @param string $followStateName
     * @return self
     */
    public function setFollowStateName(?string $followStateName): self
    {
        $this->followStateName = $followStateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormRemark(): ?string
    {
        return $this->formRemark;
    }

    /**
     * @param string $formRemark
     * @return self
     */
    public function setFormRemark(?string $formRemark): self
    {
        $this->formRemark = $formRemark;
        return $this;
    }

    /**
     * @return int
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     * @return self
     */
    public function setGender(?int $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntentionEstimation(): ?string
    {
        return $this->intentionEstimation;
    }

    /**
     * @param string $intentionEstimation
     * @return self
     */
    public function setIntentionEstimation(?string $intentionEstimation): self
    {
        $this->intentionEstimation = $intentionEstimation;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getMidInfo(): ?string
    {
        return $this->midInfo;
    }

    /**
     * @param string $midInfo
     * @return self
     */
    public function setMidInfo(?string $midInfo): self
    {
        $this->midInfo = $midInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getModuleId(): ?string
    {
        return $this->moduleId;
    }

    /**
     * @param string $moduleId
     * @return self
     */
    public function setModuleId(?string $moduleId): self
    {
        $this->moduleId = $moduleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    /**
     * @param string $moduleName
     * @return self
     */
    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function setProjectId(?string $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return self
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getQq(): ?string
    {
        return $this->qq;
    }

    /**
     * @param string $qq
     * @return self
     */
    public function setQq(?string $qq): self
    {
        $this->qq = $qq;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getRemarkDict(): ?array
    {
        return $this->remarkDict;
    }

    /**
     * @param array<string,mixed> $remarkDict
     * @return self
     */
    public function setRemarkDict(?array $remarkDict): self
    {
        $this->remarkDict = $remarkDict;
        return $this;
    }

    /**
     * @return string
     */
    public function getReqId(): ?string
    {
        return $this->reqId;
    }

    /**
     * @param string $reqId
     * @return self
     */
    public function setReqId(?string $reqId): self
    {
        $this->reqId = $reqId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchBidWord(): ?string
    {
        return $this->searchBidWord;
    }

    /**
     * @param string $searchBidWord
     * @return self
     */
    public function setSearchBidWord(?string $searchBidWord): self
    {
        $this->searchBidWord = $searchBidWord;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     * @return self
     */
    public function setSiteName(?string $siteName): self
    {
        $this->siteName = $siteName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore
     */
    public function getStore(): ?\Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore
    {
        return $this->store;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore $store
     * @return self
     */
    public function setStore(?\Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore $store): self
    {
        $this->store = $store;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSystemTags(): ?array
    {
        return $this->systemTags;
    }

    /**
     * @param string[] $systemTags
     * @return self
     */
    public function setSystemTags(?array $systemTags): self
    {
        $this->systemTags = $systemTags;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return self
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneAddress(): ?string
    {
        return $this->telephoneAddress;
    }

    /**
     * @param string $telephoneAddress
     * @return self
     */
    public function setTelephoneAddress(?string $telephoneAddress): self
    {
        $this->telephoneAddress = $telephoneAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeixin(): ?string
    {
        return $this->weixin;
    }

    /**
     * @param string $weixin
     * @return self
     */
    public function setWeixin(?string $weixin): self
    {
        $this->weixin = $weixin;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->allocationStatus !== null) {
            $result['allocation_status'] = $this->allocationStatus;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->cityName !== null) {
            $result['city_name'] = $this->cityName;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->clueOwnerName !== null) {
            $result['clue_owner_name'] = $this->clueOwnerName;
        }
        if ($this->clueReturnStatus !== null) {
            $result['clue_return_status'] = $this->clueReturnStatus;
        }
        if ($this->clueSource !== null) {
            $result['clue_source'] = $this->clueSource;
        }
        if ($this->clueState !== null) {
            $result['clue_state'] = $this->clueState;
        }
        if ($this->clueStateName !== null) {
            $result['clue_state_name'] = $this->clueStateName;
        }
        if ($this->clueType !== null) {
            $result['clue_type'] = $this->clueType;
        }
        if ($this->convertStatus !== null) {
            $result['convert_status'] = $this->convertStatus;
        }
        if ($this->countryName !== null) {
            $result['country_name'] = $this->countryName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->createTimeDetail !== null) {
            $result['create_time_detail'] = $this->createTimeDetail;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->extInfo !== null) {
            $result['ext_info'] = $this->extInfo;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->extraInfo !== null) {
            $result['extra_info'] = $this->extraInfo;
        }
        if ($this->followStateName !== null) {
            $result['follow_state_name'] = $this->followStateName;
        }
        if ($this->formRemark !== null) {
            $result['form_remark'] = $this->formRemark;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->intentionEstimation !== null) {
            $result['intention_estimation'] = $this->intentionEstimation;
        }
        if ($this->location !== null) {
            $result['location'] = $this->location;
        }
        if ($this->midInfo !== null) {
            $result['mid_info'] = $this->midInfo;
        }
        if ($this->moduleId !== null) {
            $result['module_id'] = $this->moduleId;
        }
        if ($this->moduleName !== null) {
            $result['module_name'] = $this->moduleName;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->provinceName !== null) {
            $result['province_name'] = $this->provinceName;
        }
        if ($this->qq !== null) {
            $result['qq'] = $this->qq;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->remarkDict !== null) {
            $result['remark_dict'] = $this->remarkDict;
        }
        if ($this->reqId !== null) {
            $result['req_id'] = $this->reqId;
        }
        if ($this->searchBidWord !== null) {
            $result['search_bid_word'] = $this->searchBidWord;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->siteName !== null) {
            $result['site_name'] = $this->siteName;
        }
        if ($this->store !== null) {
            $result['store'] = $this->store;
        }
        if ($this->systemTags !== null) {
            $result['system_tags'] = $this->systemTags;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->telephone !== null) {
            $result['telephone'] = $this->telephone;
        }
        if ($this->telephoneAddress !== null) {
            $result['telephone_address'] = $this->telephoneAddress;
        }
        if ($this->weixin !== null) {
            $result['weixin'] = $this->weixin;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (string) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (string) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['age'] ?? null) !== null) {
            $obj->age = (int) $v;
        }
        if (($v = $data['allocation_status'] ?? null) !== null) {
            $obj->allocationStatus = (int) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['city_name'] ?? null) !== null) {
            $obj->cityName = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (string) $v;
        }
        if (($v = $data['clue_owner_name'] ?? null) !== null) {
            $obj->clueOwnerName = (string) $v;
        }
        if (($v = $data['clue_return_status'] ?? null) !== null) {
            $obj->clueReturnStatus = (string) $v;
        }
        if (($v = $data['clue_source'] ?? null) !== null) {
            $obj->clueSource = (int) $v;
        }
        if (($v = $data['clue_state'] ?? null) !== null) {
            $obj->clueState = (int) $v;
        }
        if (($v = $data['clue_state_name'] ?? null) !== null) {
            $obj->clueStateName = (string) $v;
        }
        if (($v = $data['clue_type'] ?? null) !== null) {
            $obj->clueType = (int) $v;
        }
        if (($v = $data['convert_status'] ?? null) !== null) {
            $obj->convertStatus = (string) $v;
        }
        if (($v = $data['country_name'] ?? null) !== null) {
            $obj->countryName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['create_time_detail'] ?? null) !== null) {
            $obj->createTimeDetail = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (string) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['email'] ?? null) !== null) {
            $obj->email = (string) $v;
        }
        if (($v = $data['ext_info'] ?? null) !== null) {
            $obj->extInfo = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['extra_info'] ?? null) !== null && is_array($v)) {
            $obj->extraInfo = $v;
        }
        if (($v = $data['follow_state_name'] ?? null) !== null) {
            $obj->followStateName = (string) $v;
        }
        if (($v = $data['form_remark'] ?? null) !== null) {
            $obj->formRemark = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (int) $v;
        }
        if (($v = $data['intention_estimation'] ?? null) !== null) {
            $obj->intentionEstimation = (string) $v;
        }
        if (($v = $data['location'] ?? null) !== null) {
            $obj->location = (string) $v;
        }
        if (($v = $data['mid_info'] ?? null) !== null) {
            $obj->midInfo = (string) $v;
        }
        if (($v = $data['module_id'] ?? null) !== null) {
            $obj->moduleId = (string) $v;
        }
        if (($v = $data['module_name'] ?? null) !== null) {
            $obj->moduleName = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        if (($v = $data['qq'] ?? null) !== null) {
            $obj->qq = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['remark_dict'] ?? null) !== null && is_array($v)) {
            $obj->remarkDict = $v;
        }
        if (($v = $data['req_id'] ?? null) !== null) {
            $obj->reqId = (string) $v;
        }
        if (($v = $data['search_bid_word'] ?? null) !== null) {
            $obj->searchBidWord = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        if (($v = $data['site_name'] ?? null) !== null) {
            $obj->siteName = (string) $v;
        }
        if (($v = $data['store'] ?? null) !== null && is_array($v)) {
            $obj->store = \Oceanengine\Models\ToolsClueGetV2ResponseDataListInnerStore::fromArray($v);
        }
        if (($v = $data['system_tags'] ?? null) !== null && is_array($v)) {
            $obj->systemTags = $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['telephone'] ?? null) !== null) {
            $obj->telephone = (string) $v;
        }
        if (($v = $data['telephone_address'] ?? null) !== null) {
            $obj->telephoneAddress = (string) $v;
        }
        if (($v = $data['weixin'] ?? null) !== null) {
            $obj->weixin = (string) $v;
        }
        return $obj;
    }
}
