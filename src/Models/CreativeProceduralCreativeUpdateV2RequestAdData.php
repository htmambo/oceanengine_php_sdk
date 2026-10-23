<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeUpdateV2RequestAdData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adCategory = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAdDownloadStatus
     */
    protected ?string $adDownloadStatus = null;

    /**
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataCreativeAutoGenerateSwitch
     */
    protected ?string $creativeAutoGenerateSwitch = null;

    /**
     * @var string
     */
    protected ?string $dpaExternalUrlField = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataDynamicCreativeSwitch[]
     */
    protected ?array $dynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource
     */
    protected ?string $enableSmartSource = null;

    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var string
     */
    protected ?string $externalUrlParams = null;

    /**
     * @var string
     */
    protected ?string $iesCoreUserId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsFeedAndFavSee
     */
    protected ?string $isFeedAndFavSee = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsPresentedVideo
     */
    protected ?string $isPresentedVideo = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo $miniProgramInfo = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataParamsType
     */
    protected ?string $paramsType = null;

    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataPriorityTrial
     */
    protected ?string $priorityTrial = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var int[]
     */
    protected ?array $subLinkIdList = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataSupplementsInner[]
     */
    protected ?array $supplements = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * @return int
     */
    public function getAdCategory(): ?int
    {
        return $this->adCategory;
    }

    /**
     * @param int $adCategory
     * @return self
     */
    public function setAdCategory(?int $adCategory): self
    {
        $this->adCategory = $adCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAdDownloadStatus
     */
    public function getAdDownloadStatus(): ?string
    {
        return $this->adDownloadStatus;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAdDownloadStatus $adDownloadStatus
     * @return self
     */
    public function setAdDownloadStatus(?string $adDownloadStatus): self
    {
        $this->adDownloadStatus = $adDownloadStatus;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAdKeywords(): ?array
    {
        return $this->adKeywords;
    }

    /**
     * @param string[] $adKeywords
     * @return self
     */
    public function setAdKeywords(?array $adKeywords): self
    {
        $this->adKeywords = $adKeywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
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
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataCreativeAutoGenerateSwitch
     */
    public function getCreativeAutoGenerateSwitch(): ?string
    {
        return $this->creativeAutoGenerateSwitch;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataCreativeAutoGenerateSwitch $creativeAutoGenerateSwitch
     * @return self
     */
    public function setCreativeAutoGenerateSwitch(?string $creativeAutoGenerateSwitch): self
    {
        $this->creativeAutoGenerateSwitch = $creativeAutoGenerateSwitch;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpaExternalUrlField(): ?string
    {
        return $this->dpaExternalUrlField;
    }

    /**
     * @param string $dpaExternalUrlField
     * @return self
     */
    public function setDpaExternalUrlField(?string $dpaExternalUrlField): self
    {
        $this->dpaExternalUrlField = $dpaExternalUrlField;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataDynamicCreativeSwitch[]
     */
    public function getDynamicCreativeSwitch(): ?array
    {
        return $this->dynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataDynamicCreativeSwitch[] $dynamicCreativeSwitch
     * @return self
     */
    public function setDynamicCreativeSwitch(?array $dynamicCreativeSwitch): self
    {
        $this->dynamicCreativeSwitch = $dynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource
     */
    public function getEnableSmartSource(): ?string
    {
        return $this->enableSmartSource;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource $enableSmartSource
     * @return self
     */
    public function setEnableSmartSource(?string $enableSmartSource): self
    {
        $this->enableSmartSource = $enableSmartSource;
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
     * @return string
     */
    public function getExternalUrlParams(): ?string
    {
        return $this->externalUrlParams;
    }

    /**
     * @param string $externalUrlParams
     * @return self
     */
    public function setExternalUrlParams(?string $externalUrlParams): self
    {
        $this->externalUrlParams = $externalUrlParams;
        return $this;
    }

    /**
     * @return string
     */
    public function getIesCoreUserId(): ?string
    {
        return $this->iesCoreUserId;
    }

    /**
     * @param string $iesCoreUserId
     * @return self
     */
    public function setIesCoreUserId(?string $iesCoreUserId): self
    {
        $this->iesCoreUserId = $iesCoreUserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsFeedAndFavSee
     */
    public function getIsFeedAndFavSee(): ?string
    {
        return $this->isFeedAndFavSee;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsFeedAndFavSee $isFeedAndFavSee
     * @return self
     */
    public function setIsFeedAndFavSee(?string $isFeedAndFavSee): self
    {
        $this->isFeedAndFavSee = $isFeedAndFavSee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsPresentedVideo
     */
    public function getIsPresentedVideo(): ?string
    {
        return $this->isPresentedVideo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataIsPresentedVideo $isPresentedVideo
     * @return self
     */
    public function setIsPresentedVideo(?string $isPresentedVideo): self
    {
        $this->isPresentedVideo = $isPresentedVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo $miniProgramInfo): self
    {
        $this->miniProgramInfo = $miniProgramInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataParamsType
     */
    public function getParamsType(): ?string
    {
        return $this->paramsType;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataParamsType $paramsType
     * @return self
     */
    public function setParamsType(?string $paramsType): self
    {
        $this->paramsType = $paramsType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataPriorityTrial
     */
    public function getPriorityTrial(): ?string
    {
        return $this->priorityTrial;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataPriorityTrial $priorityTrial
     * @return self
     */
    public function setPriorityTrial(?string $priorityTrial): self
    {
        $this->priorityTrial = $priorityTrial;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSubLinkIdList(): ?array
    {
        return $this->subLinkIdList;
    }

    /**
     * @param int[] $subLinkIdList
     * @return self
     */
    public function setSubLinkIdList(?array $subLinkIdList): self
    {
        $this->subLinkIdList = $subLinkIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataSupplementsInner[]
     */
    public function getSupplements(): ?array
    {
        return $this->supplements;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataSupplementsInner[] $supplements
     * @return self
     */
    public function setSupplements(?array $supplements): self
    {
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdIndustryId(): ?int
    {
        return $this->thirdIndustryId;
    }

    /**
     * @param int $thirdIndustryId
     * @return self
     */
    public function setThirdIndustryId(?int $thirdIndustryId): self
    {
        $this->thirdIndustryId = $thirdIndustryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCategory !== null) {
            $result['ad_category'] = $this->adCategory;
        }
        if ($this->adDownloadStatus !== null) {
            $result['ad_download_status'] = $this->adDownloadStatus;
        }
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorRelatedType !== null) {
            $result['anchor_related_type'] = $this->anchorRelatedType;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->creativeAutoGenerateSwitch !== null) {
            $result['creative_auto_generate_switch'] = $this->creativeAutoGenerateSwitch;
        }
        if ($this->dpaExternalUrlField !== null) {
            $result['dpa_external_url_field'] = $this->dpaExternalUrlField;
        }
        if ($this->dynamicCreativeSwitch !== null) {
            $result['dynamic_creative_switch'] = $this->dynamicCreativeSwitch;
        }
        if ($this->enableSmartSource !== null) {
            $result['enable_smart_source'] = $this->enableSmartSource;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->externalUrlParams !== null) {
            $result['external_url_params'] = $this->externalUrlParams;
        }
        if ($this->iesCoreUserId !== null) {
            $result['ies_core_user_id'] = $this->iesCoreUserId;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->isFeedAndFavSee !== null) {
            $result['is_feed_and_fav_see'] = $this->isFeedAndFavSee;
        }
        if ($this->isPresentedVideo !== null) {
            $result['is_presented_video'] = $this->isPresentedVideo;
        }
        if ($this->miniProgramInfo !== null) {
            $result['mini_program_info'] = $this->miniProgramInfo;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->paramsType !== null) {
            $result['params_type'] = $this->paramsType;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        if ($this->priorityTrial !== null) {
            $result['priority_trial'] = $this->priorityTrial;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->subLinkIdList !== null) {
            $result['sub_link_id_list'] = $this->subLinkIdList;
        }
        if ($this->supplements !== null) {
            $result['supplements'] = $this->supplements;
        }
        if ($this->thirdIndustryId !== null) {
            $result['third_industry_id'] = $this->thirdIndustryId;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_category'] ?? null) !== null) {
            $obj->adCategory = (int) $v;
        }
        if (($v = $data['ad_download_status'] ?? null) !== null) {
            $obj->adDownloadStatus = (string) $v;
        }
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['creative_auto_generate_switch'] ?? null) !== null) {
            $obj->creativeAutoGenerateSwitch = (string) $v;
        }
        if (($v = $data['dpa_external_url_field'] ?? null) !== null) {
            $obj->dpaExternalUrlField = (string) $v;
        }
        if (($v = $data['dynamic_creative_switch'] ?? null) !== null && is_array($v)) {
            $obj->dynamicCreativeSwitch = $v;
        }
        if (($v = $data['enable_smart_source'] ?? null) !== null) {
            $obj->enableSmartSource = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['external_url_params'] ?? null) !== null) {
            $obj->externalUrlParams = (string) $v;
        }
        if (($v = $data['ies_core_user_id'] ?? null) !== null) {
            $obj->iesCoreUserId = (string) $v;
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (string) $v;
        }
        if (($v = $data['is_feed_and_fav_see'] ?? null) !== null) {
            $obj->isFeedAndFavSee = (string) $v;
        }
        if (($v = $data['is_presented_video'] ?? null) !== null) {
            $obj->isPresentedVideo = (string) $v;
        }
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataMiniProgramInfo::fromArray($v);
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['params_type'] ?? null) !== null) {
            $obj->paramsType = (string) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        if (($v = $data['priority_trial'] ?? null) !== null) {
            $obj->priorityTrial = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['sub_link_id_list'] ?? null) !== null && is_array($v)) {
            $obj->subLinkIdList = $v;
        }
        if (($v = $data['supplements'] ?? null) !== null && is_array($v)) {
            $obj->supplements = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeUpdateV2RequestAdDataSupplementsInner::fromArray($vv), $v);
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        return $obj;
    }
}
