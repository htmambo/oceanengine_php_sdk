<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialList implements \JsonSerializable
{
    /**
     * 原生锚点素材，anchor_related_type=SELECT时必填，数量上限1
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListAnchorMaterialListInner[]
     */
    protected ?array $anchorMaterialList = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * 行动号召文案，字数[2-4]，上限10
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * 图文素材信息，单次最多200个
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * 创意组件信息，数量上限2
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * 落地页链接素材，支持橙子建站&自研落地页，上限10
     * @var string[]
     */
    protected ?array $externalUrlMaterialList = null;

    /**
     * 图片素材列表
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListImageMaterialListInner[]
     */
    protected ?array $imageMaterialList = null;

    /**
     * 直玩素材信息（二期）
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListInstantPlayMaterialListInner[]
     */
    protected ?array $instantPlayMaterialList = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo
     */
    protected ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo $miniProgramInfo = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 多直达链接（二期）
     * @var string[]
     */
    protected ?array $openUrls = null;

    /**
     * 短剧合集链接url（二期）
     * @var string[]
     */
    protected ?array $playletSeriesUrlList = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo
     */
    protected ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo $productInfo = null;

    /**
     * 来源（自定义推广身份/抖音昵称/昵称），字数[2-10]
     * @var string
     */
    protected ?string $source = null;

    /**
     * 标题素材
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * 试玩素材信息
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTrialPlayMaterialListInner[]
     */
    protected ?array $trialPlayMaterialList = null;

    /**
     * 直达链接备用链接
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType
     */
    protected ?string $ulinkUrlType = null;

    /**
     * 视频素材列表
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * 落地页素材，支持橙子建站&自研落地页，上限10
     * @var string[]
     */
    protected ?array $webUrlMaterialList = null;

    /**
     * 原生锚点素材，anchor_related_type=SELECT时必填，数量上限1
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListAnchorMaterialListInner[]
     */
    public function getAnchorMaterialList(): ?array
    {
        return $this->anchorMaterialList;
    }

    /**
     * 原生锚点素材，anchor_related_type=SELECT时必填，数量上限1
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListAnchorMaterialListInner[] $anchorMaterialList
     * @return self
     */
    public function setAnchorMaterialList(?array $anchorMaterialList): self
    {
        $this->anchorMaterialList = $anchorMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * 行动号召文案，字数[2-4]，上限10
     * @return string[]
     */
    public function getCallToActionButtons(): ?array
    {
        return $this->callToActionButtons;
    }

    /**
     * 行动号召文案，字数[2-4]，上限10
     * @param string[] $callToActionButtons
     * @return self
     */
    public function setCallToActionButtons(?array $callToActionButtons): self
    {
        $this->callToActionButtons = $callToActionButtons;
        return $this;
    }

    /**
     * 图文素材信息，单次最多200个
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * 图文素材信息，单次最多200个
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * 创意组件信息，数量上限2
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * 创意组件信息，数量上限2
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * 落地页链接素材，支持橙子建站&自研落地页，上限10
     * @return string[]
     */
    public function getExternalUrlMaterialList(): ?array
    {
        return $this->externalUrlMaterialList;
    }

    /**
     * 落地页链接素材，支持橙子建站&自研落地页，上限10
     * @param string[] $externalUrlMaterialList
     * @return self
     */
    public function setExternalUrlMaterialList(?array $externalUrlMaterialList): self
    {
        $this->externalUrlMaterialList = $externalUrlMaterialList;
        return $this;
    }

    /**
     * 图片素材列表
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListImageMaterialListInner[]
     */
    public function getImageMaterialList(): ?array
    {
        return $this->imageMaterialList;
    }

    /**
     * 图片素材列表
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListImageMaterialListInner[] $imageMaterialList
     * @return self
     */
    public function setImageMaterialList(?array $imageMaterialList): self
    {
        $this->imageMaterialList = $imageMaterialList;
        return $this;
    }

    /**
     * 直玩素材信息（二期）
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListInstantPlayMaterialListInner[]
     */
    public function getInstantPlayMaterialList(): ?array
    {
        return $this->instantPlayMaterialList;
    }

    /**
     * 直玩素材信息（二期）
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListInstantPlayMaterialListInner[] $instantPlayMaterialList
     * @return self
     */
    public function setInstantPlayMaterialList(?array $instantPlayMaterialList): self
    {
        $this->instantPlayMaterialList = $instantPlayMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo $miniProgramInfo): self
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
     * 多直达链接（二期）
     * @return string[]
     */
    public function getOpenUrls(): ?array
    {
        return $this->openUrls;
    }

    /**
     * 多直达链接（二期）
     * @param string[] $openUrls
     * @return self
     */
    public function setOpenUrls(?array $openUrls): self
    {
        $this->openUrls = $openUrls;
        return $this;
    }

    /**
     * 短剧合集链接url（二期）
     * @return string[]
     */
    public function getPlayletSeriesUrlList(): ?array
    {
        return $this->playletSeriesUrlList;
    }

    /**
     * 短剧合集链接url（二期）
     * @param string[] $playletSeriesUrlList
     * @return self
     */
    public function setPlayletSeriesUrlList(?array $playletSeriesUrlList): self
    {
        $this->playletSeriesUrlList = $playletSeriesUrlList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * 来源（自定义推广身份/抖音昵称/昵称），字数[2-10]
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 来源（自定义推广身份/抖音昵称/昵称），字数[2-10]
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 标题素材
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * 标题素材
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * 试玩素材信息
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTrialPlayMaterialListInner[]
     */
    public function getTrialPlayMaterialList(): ?array
    {
        return $this->trialPlayMaterialList;
    }

    /**
     * 试玩素材信息
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTrialPlayMaterialListInner[] $trialPlayMaterialList
     * @return self
     */
    public function setTrialPlayMaterialList(?array $trialPlayMaterialList): self
    {
        $this->trialPlayMaterialList = $trialPlayMaterialList;
        return $this;
    }

    /**
     * 直达链接备用链接
     * @return string
     */
    public function getUlinkUrl(): ?string
    {
        return $this->ulinkUrl;
    }

    /**
     * 直达链接备用链接
     * @param string $ulinkUrl
     * @return self
     */
    public function setUlinkUrl(?string $ulinkUrl): self
    {
        $this->ulinkUrl = $ulinkUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType
     */
    public function getUlinkUrlType(): ?string
    {
        return $this->ulinkUrlType;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListUlinkUrlType $ulinkUrlType
     * @return self
     */
    public function setUlinkUrlType(?string $ulinkUrlType): self
    {
        $this->ulinkUrlType = $ulinkUrlType;
        return $this;
    }

    /**
     * 视频素材列表
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * 视频素材列表
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
        return $this;
    }

    /**
     * 落地页素材，支持橙子建站&自研落地页，上限10
     * @return string[]
     */
    public function getWebUrlMaterialList(): ?array
    {
        return $this->webUrlMaterialList;
    }

    /**
     * 落地页素材，支持橙子建站&自研落地页，上限10
     * @param string[] $webUrlMaterialList
     * @return self
     */
    public function setWebUrlMaterialList(?array $webUrlMaterialList): self
    {
        $this->webUrlMaterialList = $webUrlMaterialList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorMaterialList !== null) {
            $result['anchor_material_list'] = $this->anchorMaterialList;
        }
        if ($this->anchorRelatedType !== null) {
            $result['anchor_related_type'] = $this->anchorRelatedType;
        }
        if ($this->callToActionButtons !== null) {
            $result['call_to_action_buttons'] = $this->callToActionButtons;
        }
        if ($this->carouselMaterialList !== null) {
            $result['carousel_material_list'] = $this->carouselMaterialList;
        }
        if ($this->componentMaterialList !== null) {
            $result['component_material_list'] = $this->componentMaterialList;
        }
        if ($this->externalUrlMaterialList !== null) {
            $result['external_url_material_list'] = $this->externalUrlMaterialList;
        }
        if ($this->imageMaterialList !== null) {
            $result['image_material_list'] = $this->imageMaterialList;
        }
        if ($this->instantPlayMaterialList !== null) {
            $result['instant_play_material_list'] = $this->instantPlayMaterialList;
        }
        if ($this->miniProgramInfo !== null) {
            $result['mini_program_info'] = $this->miniProgramInfo;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrls !== null) {
            $result['open_urls'] = $this->openUrls;
        }
        if ($this->playletSeriesUrlList !== null) {
            $result['playlet_series_url_list'] = $this->playletSeriesUrlList;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->trialPlayMaterialList !== null) {
            $result['trial_play_material_list'] = $this->trialPlayMaterialList;
        }
        if ($this->ulinkUrl !== null) {
            $result['ulink_url'] = $this->ulinkUrl;
        }
        if ($this->ulinkUrlType !== null) {
            $result['ulink_url_type'] = $this->ulinkUrlType;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        if ($this->webUrlMaterialList !== null) {
            $result['web_url_material_list'] = $this->webUrlMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_material_list'] ?? null) !== null && is_array($v)) {
            $obj->anchorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListAnchorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['external_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->externalUrlMaterialList = $v;
        }
        if (($v = $data['image_material_list'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListImageMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['instant_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->instantPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListInstantPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListMiniProgramInfo::fromArray($v);
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_urls'] ?? null) !== null && is_array($v)) {
            $obj->openUrls = $v;
        }
        if (($v = $data['playlet_series_url_list'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlList = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['trial_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->trialPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListTrialPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['ulink_url_type'] ?? null) !== null) {
            $obj->ulinkUrlType = (string) $v;
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30RequestMaterialListVideoMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['web_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->webUrlMaterialList = $v;
        }
        return $obj;
    }
}
