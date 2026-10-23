<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataAdData implements \JsonSerializable
{
    /**
     * 是否允许客户端下载视频
     * @var int
     */
    protected ?int $adDownloadStatus = null;

    /**
     * 创意标签
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * 应用名
     * @var string
     */
    protected ?string $appName = null;

    /**
     * 是否开启自动派生创意
     * @var int
     */
    protected ?int $creativeAutoGenerateSwitch = null;

    /**
     * 落地页链接字段选择
     * @var string
     */
    protected ?string $dpaExternalUrlField = null;

    /**
     * 启用动态创意类型
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataDynamicCreativeSwitch[]
     */
    protected ?array $dynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataEnableSmartSource
     */
    protected ?string $enableSmartSource = null;

    /**
     * 落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 落地页检测参数
     * @var string
     */
    protected ?string $externalUrlParams = null;

    /**
     * 绑定抖音号
     * @var string
     */
    protected ?string $iesCoreUserId = null;

    /**
     * 是否关闭评论
     * @var int
     */
    protected ?int $isCommentDisable = null;

    /**
     * 主页作品列表隐藏广告内容
     * @var int
     */
    protected ?int $isFeedAndFavSee = null;

    /**
     * 自动生成视频素材
     * @var int
     */
    protected ?int $isPresentedVideo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo $miniProgramInfo = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataParamsType
     */
    protected ?string $paramsType = null;

    /**
     * 搭配试玩素材URL
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataPriorityTrial
     */
    protected ?string $priorityTrial = null;

    /**
     * 广告来源
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInner[]
     */
    protected ?array $supplements = null;

    /**
     * 三级行业ID
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * Android应用下载详情页
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * 是否允许客户端下载视频
     * @return int
     */
    public function getAdDownloadStatus(): ?int
    {
        return $this->adDownloadStatus;
    }

    /**
     * 是否允许客户端下载视频
     * @param int $adDownloadStatus
     * @return self
     */
    public function setAdDownloadStatus(?int $adDownloadStatus): self
    {
        $this->adDownloadStatus = $adDownloadStatus;
        return $this;
    }

    /**
     * 创意标签
     * @return string[]
     */
    public function getAdKeywords(): ?array
    {
        return $this->adKeywords;
    }

    /**
     * 创意标签
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
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * 应用名
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 应用名
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * 是否开启自动派生创意
     * @return int
     */
    public function getCreativeAutoGenerateSwitch(): ?int
    {
        return $this->creativeAutoGenerateSwitch;
    }

    /**
     * 是否开启自动派生创意
     * @param int $creativeAutoGenerateSwitch
     * @return self
     */
    public function setCreativeAutoGenerateSwitch(?int $creativeAutoGenerateSwitch): self
    {
        $this->creativeAutoGenerateSwitch = $creativeAutoGenerateSwitch;
        return $this;
    }

    /**
     * 落地页链接字段选择
     * @return string
     */
    public function getDpaExternalUrlField(): ?string
    {
        return $this->dpaExternalUrlField;
    }

    /**
     * 落地页链接字段选择
     * @param string $dpaExternalUrlField
     * @return self
     */
    public function setDpaExternalUrlField(?string $dpaExternalUrlField): self
    {
        $this->dpaExternalUrlField = $dpaExternalUrlField;
        return $this;
    }

    /**
     * 启用动态创意类型
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataDynamicCreativeSwitch[]
     */
    public function getDynamicCreativeSwitch(): ?array
    {
        return $this->dynamicCreativeSwitch;
    }

    /**
     * 启用动态创意类型
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataDynamicCreativeSwitch[] $dynamicCreativeSwitch
     * @return self
     */
    public function setDynamicCreativeSwitch(?array $dynamicCreativeSwitch): self
    {
        $this->dynamicCreativeSwitch = $dynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataEnableSmartSource
     */
    public function getEnableSmartSource(): ?string
    {
        return $this->enableSmartSource;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataEnableSmartSource $enableSmartSource
     * @return self
     */
    public function setEnableSmartSource(?string $enableSmartSource): self
    {
        $this->enableSmartSource = $enableSmartSource;
        return $this;
    }

    /**
     * 落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 落地页检测参数
     * @return string
     */
    public function getExternalUrlParams(): ?string
    {
        return $this->externalUrlParams;
    }

    /**
     * 落地页检测参数
     * @param string $externalUrlParams
     * @return self
     */
    public function setExternalUrlParams(?string $externalUrlParams): self
    {
        $this->externalUrlParams = $externalUrlParams;
        return $this;
    }

    /**
     * 绑定抖音号
     * @return string
     */
    public function getIesCoreUserId(): ?string
    {
        return $this->iesCoreUserId;
    }

    /**
     * 绑定抖音号
     * @param string $iesCoreUserId
     * @return self
     */
    public function setIesCoreUserId(?string $iesCoreUserId): self
    {
        $this->iesCoreUserId = $iesCoreUserId;
        return $this;
    }

    /**
     * 是否关闭评论
     * @return int
     */
    public function getIsCommentDisable(): ?int
    {
        return $this->isCommentDisable;
    }

    /**
     * 是否关闭评论
     * @param int $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?int $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * 主页作品列表隐藏广告内容
     * @return int
     */
    public function getIsFeedAndFavSee(): ?int
    {
        return $this->isFeedAndFavSee;
    }

    /**
     * 主页作品列表隐藏广告内容
     * @param int $isFeedAndFavSee
     * @return self
     */
    public function setIsFeedAndFavSee(?int $isFeedAndFavSee): self
    {
        $this->isFeedAndFavSee = $isFeedAndFavSee;
        return $this;
    }

    /**
     * 自动生成视频素材
     * @return int
     */
    public function getIsPresentedVideo(): ?int
    {
        return $this->isPresentedVideo;
    }

    /**
     * 自动生成视频素材
     * @param int $isPresentedVideo
     * @return self
     */
    public function setIsPresentedVideo(?int $isPresentedVideo): self
    {
        $this->isPresentedVideo = $isPresentedVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo $miniProgramInfo): self
    {
        $this->miniProgramInfo = $miniProgramInfo;
        return $this;
    }

    /**
     * 直达链接
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 直达链接
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataParamsType
     */
    public function getParamsType(): ?string
    {
        return $this->paramsType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataParamsType $paramsType
     * @return self
     */
    public function setParamsType(?string $paramsType): self
    {
        $this->paramsType = $paramsType;
        return $this;
    }

    /**
     * 搭配试玩素材URL
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * 搭配试玩素材URL
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataPriorityTrial
     */
    public function getPriorityTrial(): ?string
    {
        return $this->priorityTrial;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataPriorityTrial $priorityTrial
     * @return self
     */
    public function setPriorityTrial(?string $priorityTrial): self
    {
        $this->priorityTrial = $priorityTrial;
        return $this;
    }

    /**
     * 广告来源
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 广告来源
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInner[]
     */
    public function getSupplements(): ?array
    {
        return $this->supplements;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInner[] $supplements
     * @return self
     */
    public function setSupplements(?array $supplements): self
    {
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * 三级行业ID
     * @return int
     */
    public function getThirdIndustryId(): ?int
    {
        return $this->thirdIndustryId;
    }

    /**
     * 三级行业ID
     * @param int $thirdIndustryId
     * @return self
     */
    public function setThirdIndustryId(?int $thirdIndustryId): self
    {
        $this->thirdIndustryId = $thirdIndustryId;
        return $this;
    }

    /**
     * Android应用下载详情页
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * Android应用下载详情页
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
        if (($v = $data['ad_download_status'] ?? null) !== null) {
            $obj->adDownloadStatus = (int) $v;
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
            $obj->creativeAutoGenerateSwitch = (int) $v;
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
            $obj->isCommentDisable = (int) $v;
        }
        if (($v = $data['is_feed_and_fav_see'] ?? null) !== null) {
            $obj->isFeedAndFavSee = (int) $v;
        }
        if (($v = $data['is_presented_video'] ?? null) !== null) {
            $obj->isPresentedVideo = (int) $v;
        }
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataMiniProgramInfo::fromArray($v);
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
        if (($v = $data['supplements'] ?? null) !== null && is_array($v)) {
            $obj->supplements = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInner::fromArray($vv), $v);
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
