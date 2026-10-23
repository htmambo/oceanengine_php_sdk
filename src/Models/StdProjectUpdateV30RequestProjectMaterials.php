<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30RequestProjectMaterials implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsAnchorMaterialListInner[]
     */
    protected ?array $anchorMaterialList = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorRelatedType
     */
    protected ?string $anchorRelatedType = null;

    /**
     * @var string[]
     */
    protected ?array $callToActionButtons = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsComponentMaterialListInner[]
     */
    protected ?array $componentMaterialList = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsDpaImageMode[]
     */
    protected ?array $dpaImageMode = null;

    /**
     * @var string
     */
    protected ?string $externalUrlField = null;

    /**
     * @var string[]
     */
    protected ?array $externalUrlMaterialList = null;

    /**
     * @var string
     */
    protected ?string $externalUrlParams = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo $miniProgramInfo = null;

    /**
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * @var string
     */
    protected ?string $openUrlField = null;

    /**
     * @var string
     */
    protected ?string $openUrlParams = null;

    /**
     * @var string[]
     */
    protected ?array $openUrls = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle
     */
    protected ?string $originalVideoTitle = null;

    /**
     * @var string[]
     */
    protected ?array $playletSeriesUrlList = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo $productInfo = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $ulinkUrl = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsUlinkUrlType
     */
    protected ?string $ulinkUrlType = null;

    /**
     * @var string[]
     */
    protected ?array $webUrlMaterialList = null;

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsAnchorMaterialListInner[]
     */
    public function getAnchorMaterialList(): ?array
    {
        return $this->anchorMaterialList;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsAnchorMaterialListInner[] $anchorMaterialList
     * @return self
     */
    public function setAnchorMaterialList(?array $anchorMaterialList): self
    {
        $this->anchorMaterialList = $anchorMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorRelatedType
     */
    public function getAnchorRelatedType(): ?string
    {
        return $this->anchorRelatedType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorRelatedType $anchorRelatedType
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
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsComponentMaterialListInner[]
     */
    public function getComponentMaterialList(): ?array
    {
        return $this->componentMaterialList;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsComponentMaterialListInner[] $componentMaterialList
     * @return self
     */
    public function setComponentMaterialList(?array $componentMaterialList): self
    {
        $this->componentMaterialList = $componentMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsDpaImageMode[]
     */
    public function getDpaImageMode(): ?array
    {
        return $this->dpaImageMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsDpaImageMode[] $dpaImageMode
     * @return self
     */
    public function setDpaImageMode(?array $dpaImageMode): self
    {
        $this->dpaImageMode = $dpaImageMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrlField(): ?string
    {
        return $this->externalUrlField;
    }

    /**
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
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo
     */
    public function getMiniProgramInfo(): ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo
    {
        return $this->miniProgramInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo $miniProgramInfo
     * @return self
     */
    public function setMiniProgramInfo(?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo $miniProgramInfo): self
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
     * @return string
     */
    public function getOpenUrlField(): ?string
    {
        return $this->openUrlField;
    }

    /**
     * @param string $openUrlField
     * @return self
     */
    public function setOpenUrlField(?string $openUrlField): self
    {
        $this->openUrlField = $openUrlField;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrlParams(): ?string
    {
        return $this->openUrlParams;
    }

    /**
     * @param string $openUrlParams
     * @return self
     */
    public function setOpenUrlParams(?string $openUrlParams): self
    {
        $this->openUrlParams = $openUrlParams;
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
     * @return \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle
     */
    public function getOriginalVideoTitle(): ?string
    {
        return $this->originalVideoTitle;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle $originalVideoTitle
     * @return self
     */
    public function setOriginalVideoTitle(?string $originalVideoTitle): self
    {
        $this->originalVideoTitle = $originalVideoTitle;
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
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
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
     * @return \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsUlinkUrlType
     */
    public function getUlinkUrlType(): ?string
    {
        return $this->ulinkUrlType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsUlinkUrlType $ulinkUrlType
     * @return self
     */
    public function setUlinkUrlType(?string $ulinkUrlType): self
    {
        $this->ulinkUrlType = $ulinkUrlType;
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
        if ($this->componentMaterialList !== null) {
            $result['component_material_list'] = $this->componentMaterialList;
        }
        if ($this->dpaImageMode !== null) {
            $result['dpa_image_mode'] = $this->dpaImageMode;
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
        if ($this->openUrls !== null) {
            $result['open_urls'] = $this->openUrls;
        }
        if ($this->originalVideoTitle !== null) {
            $result['original_video_title'] = $this->originalVideoTitle;
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
        if ($this->ulinkUrl !== null) {
            $result['ulink_url'] = $this->ulinkUrl;
        }
        if ($this->ulinkUrlType !== null) {
            $result['ulink_url_type'] = $this->ulinkUrlType;
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
            $obj->anchorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsAnchorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['anchor_related_type'] ?? null) !== null) {
            $obj->anchorRelatedType = (string) $v;
        }
        if (($v = $data['call_to_action_buttons'] ?? null) !== null && is_array($v)) {
            $obj->callToActionButtons = $v;
        }
        if (($v = $data['component_material_list'] ?? null) !== null && is_array($v)) {
            $obj->componentMaterialList = array_map(fn ($vv) => \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsComponentMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['dpa_image_mode'] ?? null) !== null && is_array($v)) {
            $obj->dpaImageMode = $v;
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
        if (($v = $data['mini_program_info'] ?? null) !== null && is_array($v)) {
            $obj->miniProgramInfo = \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsMiniProgramInfo::fromArray($v);
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
        if (($v = $data['open_urls'] ?? null) !== null && is_array($v)) {
            $obj->openUrls = $v;
        }
        if (($v = $data['original_video_title'] ?? null) !== null) {
            $obj->originalVideoTitle = (string) $v;
        }
        if (($v = $data['playlet_series_url_list'] ?? null) !== null && is_array($v)) {
            $obj->playletSeriesUrlList = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterialsProductInfo::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['ulink_url'] ?? null) !== null) {
            $obj->ulinkUrl = (string) $v;
        }
        if (($v = $data['ulink_url_type'] ?? null) !== null) {
            $obj->ulinkUrlType = (string) $v;
        }
        if (($v = $data['web_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->webUrlMaterialList = $v;
        }
        return $obj;
    }
}
