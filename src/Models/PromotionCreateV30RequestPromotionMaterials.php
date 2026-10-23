<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterials implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsAdvancedDcSettings[]
     */
    protected ?array $advancedDcSettings = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsAnchorMaterialListInner[]
     */
    protected ?array $anchorMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsBlueFlowMaterialRecommend
     */
    protected ?string $blueFlowMaterialRecommend = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsDynamicCreativeSwitch
     */
    protected ?string $dynamicCreativeSwitch = null;

    /**
     * 落地页链接字段选择，当params_type为DPA时必填
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
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInner[]
     */
    protected ?array $imageMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsInstantPlayMaterialListInner[]
     */
    protected ?array $instantPlayMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsIntelligentGeneration
     */
    protected ?string $intelligentGeneration = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo
     */
    protected ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo $miniProgramInfo = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 直达链接字段选择，当dpa_open_url_type为DPA必填
     * @var string
     */
    protected ?string $openUrlField = null;

    /**
     * 直达链接检测参数(DPA推广目的特有,在“产品库中提取的scheme地址\"后面追加填写的参数)
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOpenUrlType
     */
    protected ?string $openUrlType = null;

    /**
     * 优选直达链接
     * @var string[]
     */
    protected ?array $openUrls = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOriginalVideoTitle
     */
    protected ?string $originalVideoTitle = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsParamsType
     */
    protected ?string $paramsType = null;

    /**
     * 种草搜索词素材
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsPlantGrassSearchWordMaterialListInner[]
     */
    protected ?array $plantGrassSearchWordMaterialList = null;

    /**
     * @var string[]
     */
    protected ?array $playletSeriesUrlList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo
     */
    protected ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTextAbstractListInner[]
     */
    protected ?array $textAbstractList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTrialPlayMaterialListInner[]
     */
    protected ?array $trialPlayMaterialList = null;

    /**
     * @var string
     */
    protected ?string $ulink = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30PromotionMaterialsUlinkType
     */
    protected ?string $ulinkType = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * @var string[]
     */
    protected ?array $webUrlMaterialList = null;

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsAdvancedDcSettings[]
     */
    public function getAdvancedDcSettings(): ?array
    {
        return $this->advancedDcSettings;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsAdvancedDcSettings[] $advancedDcSettings
     * @return self
     */
    public function setAdvancedDcSettings(?array $advancedDcSettings): self
    {
        $this->advancedDcSettings = $advancedDcSettings;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsAnchorMaterialListInner[]
     */
    public function getAnchorMaterialList(): ?array
    {
        return $this->anchorMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsAnchorMaterialListInner[] $anchorMaterialList
     * @return self
     */
    public function setAnchorMaterialList(?array $anchorMaterialList): self
    {
        $this->anchorMaterialList = $anchorMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsBlueFlowMaterialRecommend
     */
    public function getBlueFlowMaterialRecommend(): ?string
    {
        return $this->blueFlowMaterialRecommend;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsBlueFlowMaterialRecommend $blueFlowMaterialRecommend
     * @return self
     */
    public function setBlueFlowMaterialRecommend(?string $blueFlowMaterialRecommend): self
    {
        $this->blueFlowMaterialRecommend = $blueFlowMaterialRecommend;
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
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsDynamicCreativeSwitch
     */
    public function getDynamicCreativeSwitch(): ?string
    {
        return $this->dynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsDynamicCreativeSwitch $dynamicCreativeSwitch
     * @return self
     */
    public function setDynamicCreativeSwitch(?string $dynamicCreativeSwitch): self
    {
        $this->dynamicCreativeSwitch = $dynamicCreativeSwitch;
        return $this;
    }

    /**
     * 落地页链接字段选择，当params_type为DPA时必填
     * @return string
     */
    public function getExternalUrlField(): ?string
    {
        return $this->externalUrlField;
    }

    /**
     * 落地页链接字段选择，当params_type为DPA时必填
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
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInner[]
     */
    public function getImageMaterialList(): ?array
    {
        return $this->imageMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInner[] $imageMaterialList
     * @return self
     */
    public function setImageMaterialList(?array $imageMaterialList): self
    {
        $this->imageMaterialList = $imageMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsInstantPlayMaterialListInner[]
     */
    public function getInstantPlayMaterialList(): ?array
    {
        return $this->instantPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsInstantPlayMaterialListInner[] $instantPlayMaterialList
     * @return self
     */
    public function setInstantPlayMaterialList(?array $instantPlayMaterialList): self
    {
        $this->instantPlayMaterialList = $instantPlayMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsIntelligentGeneration
     */
    public function getIntelligentGeneration(): ?string
    {
        return $this->intelligentGeneration;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsIntelligentGeneration $intelligentGeneration
     * @return self
     */
    public function setIntelligentGeneration(?string $intelligentGeneration): self
    {
        $this->intelligentGeneration = $intelligentGeneration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo $miniProgramInfo): self
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
     * 直达链接字段选择，当dpa_open_url_type为DPA必填
     * @return string
     */
    public function getOpenUrlField(): ?string
    {
        return $this->openUrlField;
    }

    /**
     * 直达链接字段选择，当dpa_open_url_type为DPA必填
     * @param string $openUrlField
     * @return self
     */
    public function setOpenUrlField(?string $openUrlField): self
    {
        $this->openUrlField = $openUrlField;
        return $this;
    }

    /**
     * 直达链接检测参数(DPA推广目的特有,在“产品库中提取的scheme地址\"后面追加填写的参数)
     * @return string
     */
    public function getOpenUrlParams(): ?string
    {
        return $this->openUrlParams;
    }

    /**
     * 直达链接检测参数(DPA推广目的特有,在“产品库中提取的scheme地址\"后面追加填写的参数)
     * @param string $openUrlParams
     * @return self
     */
    public function setOpenUrlParams(?string $openUrlParams): self
    {
        $this->openUrlParams = $openUrlParams;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOpenUrlType
     */
    public function getOpenUrlType(): ?string
    {
        return $this->openUrlType;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOpenUrlType $openUrlType
     * @return self
     */
    public function setOpenUrlType(?string $openUrlType): self
    {
        $this->openUrlType = $openUrlType;
        return $this;
    }

    /**
     * 优选直达链接
     * @return string[]
     */
    public function getOpenUrls(): ?array
    {
        return $this->openUrls;
    }

    /**
     * 优选直达链接
     * @param string[] $openUrls
     * @return self
     */
    public function setOpenUrls(?array $openUrls): self
    {
        $this->openUrls = $openUrls;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOriginalVideoTitle
     */
    public function getOriginalVideoTitle(): ?string
    {
        return $this->originalVideoTitle;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsOriginalVideoTitle $originalVideoTitle
     * @return self
     */
    public function setOriginalVideoTitle(?string $originalVideoTitle): self
    {
        $this->originalVideoTitle = $originalVideoTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsParamsType
     */
    public function getParamsType(): ?string
    {
        return $this->paramsType;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsParamsType $paramsType
     * @return self
     */
    public function setParamsType(?string $paramsType): self
    {
        $this->paramsType = $paramsType;
        return $this;
    }

    /**
     * 种草搜索词素材
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsPlantGrassSearchWordMaterialListInner[]
     */
    public function getPlantGrassSearchWordMaterialList(): ?array
    {
        return $this->plantGrassSearchWordMaterialList;
    }

    /**
     * 种草搜索词素材
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsPlantGrassSearchWordMaterialListInner[] $plantGrassSearchWordMaterialList
     * @return self
     */
    public function setPlantGrassSearchWordMaterialList(?array $plantGrassSearchWordMaterialList): self
    {
        $this->plantGrassSearchWordMaterialList = $plantGrassSearchWordMaterialList;
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
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTextAbstractListInner[]
     */
    public function getTextAbstractList(): ?array
    {
        return $this->textAbstractList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTextAbstractListInner[] $textAbstractList
     * @return self
     */
    public function setTextAbstractList(?array $textAbstractList): self
    {
        $this->textAbstractList = $textAbstractList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTrialPlayMaterialListInner[]
     */
    public function getTrialPlayMaterialList(): ?array
    {
        return $this->trialPlayMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTrialPlayMaterialListInner[] $trialPlayMaterialList
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
    public function getUlink(): ?string
    {
        return $this->ulink;
    }

    /**
     * @param string $ulink
     * @return self
     */
    public function setUlink(?string $ulink): self
    {
        $this->ulink = $ulink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30PromotionMaterialsUlinkType
     */
    public function getUlinkType(): ?string
    {
        return $this->ulinkType;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30PromotionMaterialsUlinkType $ulinkType
     * @return self
     */
    public function setUlinkType(?string $ulinkType): self
    {
        $this->ulinkType = $ulinkType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsVideoMaterialListInner[] $videoMaterialList
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
        if ($this->advancedDcSettings !== null) {
            $result['advanced_dc_settings'] = $this->advancedDcSettings;
        }
        if ($this->anchorMaterialList !== null) {
            $result['anchor_material_list'] = $this->anchorMaterialList;
        }
        if ($this->blueFlowMaterialRecommend !== null) {
            $result['blue_flow_material_recommend'] = $this->blueFlowMaterialRecommend;
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
        if ($this->dynamicCreativeSwitch !== null) {
            $result['dynamic_creative_switch'] = $this->dynamicCreativeSwitch;
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
        if ($this->intelligentGeneration !== null) {
            $result['intelligent_generation'] = $this->intelligentGeneration;
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
        if ($this->originalVideoTitle !== null) {
            $result['original_video_title'] = $this->originalVideoTitle;
        }
        if ($this->paramsType !== null) {
            $result['params_type'] = $this->paramsType;
        }
        if ($this->plantGrassSearchWordMaterialList !== null) {
            $result['plant_grass_search_word_material_list'] = $this->plantGrassSearchWordMaterialList;
        }
        if ($this->playletSeriesUrlList !== null) {
            $result['playlet_series_url_list'] = $this->playletSeriesUrlList;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->textAbstractList !== null) {
            $result['text_abstract_list'] = $this->textAbstractList;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->trialPlayMaterialList !== null) {
            $result['trial_play_material_list'] = $this->trialPlayMaterialList;
        }
        if ($this->ulink !== null) {
            $result['ulink'] = $this->ulink;
        }
        if ($this->ulinkType !== null) {
            $result['ulink_type'] = $this->ulinkType;
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
        if (($v = $data['advanced_dc_settings'] ?? null) !== null && is_array($v)) {
            $obj->advancedDcSettings = $v;
        }
        if (($v = $data['anchor_material_list'] ?? null) !== null && is_array($v)) {
            $obj->anchorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsAnchorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['blue_flow_material_recommend'] ?? null) !== null) {
            $obj->blueFlowMaterialRecommend = (string) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['dynamic_creative_switch'] ?? null) !== null) {
            $obj->dynamicCreativeSwitch = (string) $v;
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
            $obj->imageMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsImageMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['instant_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->instantPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsInstantPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['intelligent_generation'] ?? null) !== null) {
            $obj->intelligentGeneration = (string) $v;
        }
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsMiniProgramInfo::fromArray($v);
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
        if (($v = $data['original_video_title'] ?? null) !== null) {
            $obj->originalVideoTitle = (string) $v;
        }
        if (($v = $data['params_type'] ?? null) !== null) {
            $obj->paramsType = (string) $v;
        }
        if (($v = $data['plant_grass_search_word_material_list'] ?? null) !== null && is_array($v)) {
            $obj->plantGrassSearchWordMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsPlantGrassSearchWordMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['playlet_series_url_list'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlList = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsProductInfo::fromArray($v);
        }
        if (($v = $data['text_abstract_list'] ?? null) !== null && is_array($v)) {
            $obj->textAbstractList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTextAbstractListInner::fromArray($vv), $v);
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['trial_play_material_list'] ?? null) !== null && is_array($v)) {
            $obj->trialPlayMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTrialPlayMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['ulink'] ?? null) !== null) {
            $obj->ulink = (string) $v;
        }
        if (($v = $data['ulink_type'] ?? null) !== null) {
            $obj->ulinkType = (string) $v;
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsVideoMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['web_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->webUrlMaterialList = $v;
        }
        return $obj;
    }
}
