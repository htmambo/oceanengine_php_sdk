<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataAnchorMaterialListInner[]
     */
    protected ?array $anchorMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo $cursorInfo = null;

    /**
     * 落地页链接字段选择
     * @var string
     */
    protected ?string $externalUrlField = null;

    /**
     * @var string[]
     */
    protected ?array $externalUrlMaterialList = null;

    /**
     * 落地页检测参数
     * @var string
     */
    protected ?string $externalUrlParams = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataImageMaterialListInner[]
     */
    protected ?array $imageMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataInstantPlayMaterialListInner[]
     */
    protected ?array $instantPlayMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo
     */
    protected ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo $miniProgramInfo = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 直达链接字段选择
     * @var string
     */
    protected ?string $openUrlField = null;

    /**
     * 直达链接检测参数
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataOpenUrlType
     */
    protected ?string $openUrlType = null;

    /**
     * @var string[]
     */
    protected ?array $openUrls = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataParamsType
     */
    protected ?string $paramsType = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPlayletSeriesUrlInfoInner[]
     */
    protected ?array $playletSeriesUrlInfo = null;

    /**
     * @var string[]
     */
    protected ?array $playletSeriesUrlList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo
     */
    protected ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTrialPlayMaterialListInner[]
     */
    protected ?array $trialPlayMaterialList = null;

    /**
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataUlinkUrlType
     */
    protected ?string $ulinkUrlType = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * @var string[]
     */
    protected ?array $webUrlMaterialList = null;

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataAnchorMaterialListInner[]
     */
    public function getAnchorMaterialList(): ?array
    {
        return $this->anchorMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataAnchorMaterialListInner[] $anchorMaterialList
     * @return self
     */
    public function setAnchorMaterialList(?array $anchorMaterialList): self
    {
        $this->anchorMaterialList = $anchorMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataAnchorRelatedType $anchorRelatedType
     * @return self
     */
    public function setAnchorRelatedType(?string $anchorRelatedType): self
    {
        $this->anchorRelatedType = $anchorRelatedType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCallToActionButtons(): ?array
    {
        return $this->callToActionButtons;
    }

    /**
     * @param string[] $callToActionButtons
     * @return self
     */
    public function setCallToActionButtons(?array $callToActionButtons): self
    {
        $this->callToActionButtons = $callToActionButtons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * 落地页链接字段选择
     * @return string
     */
    public function getExternalUrlField(): ?string
    {
        return $this->externalUrlField;
    }

    /**
     * 落地页链接字段选择
     * @param string $externalUrlField
     * @return self
     */
    public function setExternalUrlField(?string $externalUrlField): self
    {
        $this->externalUrlField = $externalUrlField;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExternalUrlMaterialList(): ?array
    {
        return $this->externalUrlMaterialList;
    }

    /**
     * @param string[] $externalUrlMaterialList
     * @return self
     */
    public function setExternalUrlMaterialList(?array $externalUrlMaterialList): self
    {
        $this->externalUrlMaterialList = $externalUrlMaterialList;
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
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataImageMaterialListInner[]
     */
    public function getImageMaterialList(): ?array
    {
        return $this->imageMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataImageMaterialListInner[] $imageMaterialList
     * @return self
     */
    public function setImageMaterialList(?array $imageMaterialList): self
    {
        $this->imageMaterialList = $imageMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataInstantPlayMaterialListInner[]
     */
    public function getInstantPlayMaterialList(): ?array
    {
        return $this->instantPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataInstantPlayMaterialListInner[] $instantPlayMaterialList
     * @return self
     */
    public function setInstantPlayMaterialList(?array $instantPlayMaterialList): self
    {
        $this->instantPlayMaterialList = $instantPlayMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo $miniProgramInfo): self
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
     * 直达链接字段选择
     * @return string
     */
    public function getOpenUrlField(): ?string
    {
        return $this->openUrlField;
    }

    /**
     * 直达链接字段选择
     * @param string $openUrlField
     * @return self
     */
    public function setOpenUrlField(?string $openUrlField): self
    {
        $this->openUrlField = $openUrlField;
        return $this;
    }

    /**
     * 直达链接检测参数
     * @return string
     */
    public function getOpenUrlParams(): ?string
    {
        return $this->openUrlParams;
    }

    /**
     * 直达链接检测参数
     * @param string $openUrlParams
     * @return self
     */
    public function setOpenUrlParams(?string $openUrlParams): self
    {
        $this->openUrlParams = $openUrlParams;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataOpenUrlType
     */
    public function getOpenUrlType(): ?string
    {
        return $this->openUrlType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataOpenUrlType $openUrlType
     * @return self
     */
    public function setOpenUrlType(?string $openUrlType): self
    {
        $this->openUrlType = $openUrlType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOpenUrls(): ?array
    {
        return $this->openUrls;
    }

    /**
     * @param string[] $openUrls
     * @return self
     */
    public function setOpenUrls(?array $openUrls): self
    {
        $this->openUrls = $openUrls;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataParamsType
     */
    public function getParamsType(): ?string
    {
        return $this->paramsType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataParamsType $paramsType
     * @return self
     */
    public function setParamsType(?string $paramsType): self
    {
        $this->paramsType = $paramsType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPlayletSeriesUrlInfoInner[]
     */
    public function getPlayletSeriesUrlInfo(): ?array
    {
        return $this->playletSeriesUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPlayletSeriesUrlInfoInner[] $playletSeriesUrlInfo
     * @return self
     */
    public function setPlayletSeriesUrlInfo(?array $playletSeriesUrlInfo): self
    {
        $this->playletSeriesUrlInfo = $playletSeriesUrlInfo;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPlayletSeriesUrlList(): ?array
    {
        return $this->playletSeriesUrlList;
    }

    /**
     * @param string[] $playletSeriesUrlList
     * @return self
     */
    public function setPlayletSeriesUrlList(?array $playletSeriesUrlList): self
    {
        $this->playletSeriesUrlList = $playletSeriesUrlList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTrialPlayMaterialListInner[]
     */
    public function getTrialPlayMaterialList(): ?array
    {
        return $this->trialPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTrialPlayMaterialListInner[] $trialPlayMaterialList
     * @return self
     */
    public function setTrialPlayMaterialList(?array $trialPlayMaterialList): self
    {
        $this->trialPlayMaterialList = $trialPlayMaterialList;
        return $this;
    }

    /**
     * @return string
     */
    public function getUlinkUrl(): ?string
    {
        return $this->ulinkUrl;
    }

    /**
     * @param string $ulinkUrl
     * @return self
     */
    public function setUlinkUrl(?string $ulinkUrl): self
    {
        $this->ulinkUrl = $ulinkUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataUlinkUrlType
     */
    public function getUlinkUrlType(): ?string
    {
        return $this->ulinkUrlType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataUlinkUrlType $ulinkUrlType
     * @return self
     */
    public function setUlinkUrlType(?string $ulinkUrlType): self
    {
        $this->ulinkUrlType = $ulinkUrlType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebUrlMaterialList(): ?array
    {
        return $this->webUrlMaterialList;
    }

    /**
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
        if ($this->cursorInfo !== null) {
            $result['cursor_info'] = $this->cursorInfo;
        }
        if ($this->externalUrlField !== null) {
            $result['external_url_field'] = $this->externalUrlField;
        }
        if ($this->externalUrlMaterialList !== null) {
            $result['external_url_material_list'] = $this->externalUrlMaterialList;
        }
        if ($this->externalUrlParams !== null) {
            $result['external_url_params'] = $this->externalUrlParams;
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
        if ($this->openUrlField !== null) {
            $result['open_url_field'] = $this->openUrlField;
        }
        if ($this->openUrlParams !== null) {
            $result['open_url_params'] = $this->openUrlParams;
        }
        if ($this->openUrlType !== null) {
            $result['open_url_type'] = $this->openUrlType;
        }
        if ($this->openUrls !== null) {
            $result['open_urls'] = $this->openUrls;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->paramsType !== null) {
            $result['params_type'] = $this->paramsType;
        }
        if ($this->playletSeriesUrlInfo !== null) {
            $result['playlet_series_url_info'] = $this->playletSeriesUrlInfo;
        }
        if ($this->playletSeriesUrlList !== null) {
            $result['playlet_series_url_list'] = $this->playletSeriesUrlList;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
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
            $obj->anchorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataAnchorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['external_url_field'] ?? null) !== null) {
            $obj->externalUrlField = (string) $v;
        }
        if (($v = $data['external_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->externalUrlMaterialList = $v;
        }
        if (($v = $data['external_url_params'] ?? null) !== null) {
            $obj->externalUrlParams = (string) $v;
        }
        if (($v = $data['image_material_list'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataImageMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['instant_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->instantPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataInstantPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataMiniProgramInfo::fromArray($v);
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_field'] ?? null) !== null) {
            $obj->openUrlField = (string) $v;
        }
        if (($v = $data['open_url_params'] ?? null) !== null) {
            $obj->openUrlParams = (string) $v;
        }
        if (($v = $data['open_url_type'] ?? null) !== null) {
            $obj->openUrlType = (string) $v;
        }
        if (($v = $data['open_urls'] ?? null) !== null && is_array($v)) {
            $obj->openUrls = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['params_type'] ?? null) !== null) {
            $obj->paramsType = (string) $v;
        }
        if (($v = $data['playlet_series_url_info'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlInfo = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataPlayletSeriesUrlInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['playlet_series_url_list'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlList = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataProductInfo::fromArray($v);
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['trial_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->trialPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataTrialPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['ulink_url_type'] ?? null) !== null) {
            $obj->ulinkUrlType = (string) $v;
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectMaterialGetV30ResponseDataVideoMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['web_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->webUrlMaterialList = $v;
        }
        return $obj;
    }
}
