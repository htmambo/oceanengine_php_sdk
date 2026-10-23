<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo $categoryInfo = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[]
     */
    protected ?array $creativeData = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeDisplayMode
     */
    protected ?string $creativeDisplayMode = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeIsAigc
     */
    protected ?string $creativeIsAigc = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeTemplate
     */
    protected ?string $creativeTemplate = null;

    /**
     * 投放日期 2023-03-25
     * @var string[]
     */
    protected ?array $date = null;

    /**
     * 投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent $materialComponent = null;

    /**
     * 素材ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 素材名称
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30DataMaterialsMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 投放开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 监测链接周期配置组
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInner[]
     */
    protected ?array $trackUrlGroupInfos = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo $trackUrlInfo = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo
     */
    public function getCategoryInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo
    {
        return $this->categoryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo $categoryInfo
     * @return self
     */
    public function setCategoryInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo $categoryInfo): self
    {
        $this->categoryInfo = $categoryInfo;
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
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[]
     */
    public function getCreativeData(): ?array
    {
        return $this->creativeData;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCreativeDataInner[] $creativeData
     * @return self
     */
    public function setCreativeData(?array $creativeData): self
    {
        $this->creativeData = $creativeData;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeDisplayMode
     */
    public function getCreativeDisplayMode(): ?string
    {
        return $this->creativeDisplayMode;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeDisplayMode $creativeDisplayMode
     * @return self
     */
    public function setCreativeDisplayMode(?string $creativeDisplayMode): self
    {
        $this->creativeDisplayMode = $creativeDisplayMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeIsAigc
     */
    public function getCreativeIsAigc(): ?string
    {
        return $this->creativeIsAigc;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeIsAigc $creativeIsAigc
     * @return self
     */
    public function setCreativeIsAigc(?string $creativeIsAigc): self
    {
        $this->creativeIsAigc = $creativeIsAigc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeTemplate
     */
    public function getCreativeTemplate(): ?string
    {
        return $this->creativeTemplate;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30DataMaterialsCreativeTemplate $creativeTemplate
     * @return self
     */
    public function setCreativeTemplate(?string $creativeTemplate): self
    {
        $this->creativeTemplate = $creativeTemplate;
        return $this;
    }

    /**
     * 投放日期 2023-03-25
     * @return string[]
     */
    public function getDate(): ?array
    {
        return $this->date;
    }

    /**
     * 投放日期 2023-03-25
     * @param string[] $date
     * @return self
     */
    public function setDate(?array $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent
     */
    public function getMaterialComponent(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent
    {
        return $this->materialComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent $materialComponent
     * @return self
     */
    public function setMaterialComponent(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent $materialComponent): self
    {
        $this->materialComponent = $materialComponent;
        return $this;
    }

    /**
     * 素材ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 素材名称
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * 素材名称
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30DataMaterialsMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30DataMaterialsMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 投放开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 监测链接周期配置组
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInner[]
     */
    public function getTrackUrlGroupInfos(): ?array
    {
        return $this->trackUrlGroupInfos;
    }

    /**
     * 监测链接周期配置组
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInner[] $trackUrlGroupInfos
     * @return self
     */
    public function setTrackUrlGroupInfos(?array $trackUrlGroupInfos): self
    {
        $this->trackUrlGroupInfos = $trackUrlGroupInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo $trackUrlInfo): self
    {
        $this->trackUrlInfo = $trackUrlInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->categoryInfo !== null) {
            $result['category_info'] = $this->categoryInfo;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->creativeData !== null) {
            $result['creative_data'] = $this->creativeData;
        }
        if ($this->creativeDisplayMode !== null) {
            $result['creative_display_mode'] = $this->creativeDisplayMode;
        }
        if ($this->creativeIsAigc !== null) {
            $result['creative_is_aigc'] = $this->creativeIsAigc;
        }
        if ($this->creativeTemplate !== null) {
            $result['creative_template'] = $this->creativeTemplate;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->materialComponent !== null) {
            $result['material_component'] = $this->materialComponent;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->trackUrlGroupInfos !== null) {
            $result['track_url_group_infos'] = $this->trackUrlGroupInfos;
        }
        if ($this->trackUrlInfo !== null) {
            $result['track_url_info'] = $this->trackUrlInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category_info'] ?? null) !== null && is_array($v)) {
            $obj->categoryInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCategoryInfo::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['creative_data'] ?? null) !== null && is_array($v)) {
            $obj->creativeData = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerCreativeDataInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_display_mode'] ?? null) !== null) {
            $obj->creativeDisplayMode = (string) $v;
        }
        if (($v = $data['creative_is_aigc'] ?? null) !== null) {
            $obj->creativeIsAigc = (string) $v;
        }
        if (($v = $data['creative_template'] ?? null) !== null) {
            $obj->creativeTemplate = (string) $v;
        }
        if (($v = $data['date'] ?? null) !== null && is_array($v)) {
            $obj->date = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['material_component'] ?? null) !== null && is_array($v)) {
            $obj->materialComponent = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponent::fromArray($v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['track_url_group_infos'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlGroupInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
