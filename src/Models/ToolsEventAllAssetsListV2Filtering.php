<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAllAssetsListV2Filtering implements \JsonSerializable
{
    /**
     * 资产id列表,最大`100`
     * @var int[]
     */
    protected ?array $assetIds = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsListV2FilteringAssetType
     */
    protected ?string $assetType = null;

    /**
     * 按照资产修改时间筛选，结束时间`YYYY-MM-DD`，必须与开始时间搭配传入 开始时间必须≤结束时间
     * @var string
     */
    protected ?string $modifyEndTime = null;

    /**
     * 按照资产修改时间筛选，开始时间`YYYY-MM-DD`，必须与结束时间搭配传入 开始时间必须≤结束时间
     * @var string
     */
    protected ?string $modifyStartTime = null;

    /**
     * 资产id列表,最大`100`
     * @return int[]
     */
    public function getAssetIds(): ?array
    {
        return $this->assetIds;
    }

    /**
     * 资产id列表,最大`100`
     * @param int[] $assetIds
     * @return self
     */
    public function setAssetIds(?array $assetIds): self
    {
        $this->assetIds = $assetIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsListV2FilteringAssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsListV2FilteringAssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 按照资产修改时间筛选，结束时间`YYYY-MM-DD`，必须与开始时间搭配传入 开始时间必须≤结束时间
     * @return string
     */
    public function getModifyEndTime(): ?string
    {
        return $this->modifyEndTime;
    }

    /**
     * 按照资产修改时间筛选，结束时间`YYYY-MM-DD`，必须与开始时间搭配传入 开始时间必须≤结束时间
     * @param string $modifyEndTime
     * @return self
     */
    public function setModifyEndTime(?string $modifyEndTime): self
    {
        $this->modifyEndTime = $modifyEndTime;
        return $this;
    }

    /**
     * 按照资产修改时间筛选，开始时间`YYYY-MM-DD`，必须与结束时间搭配传入 开始时间必须≤结束时间
     * @return string
     */
    public function getModifyStartTime(): ?string
    {
        return $this->modifyStartTime;
    }

    /**
     * 按照资产修改时间筛选，开始时间`YYYY-MM-DD`，必须与结束时间搭配传入 开始时间必须≤结束时间
     * @param string $modifyStartTime
     * @return self
     */
    public function setModifyStartTime(?string $modifyStartTime): self
    {
        $this->modifyStartTime = $modifyStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetIds !== null) {
            $result['asset_ids'] = $this->assetIds;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->modifyEndTime !== null) {
            $result['modify_end_time'] = $this->modifyEndTime;
        }
        if ($this->modifyStartTime !== null) {
            $result['modify_start_time'] = $this->modifyStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_ids'] ?? null) !== null && is_array($v)) {
            $obj->assetIds = $v;
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['modify_end_time'] ?? null) !== null) {
            $obj->modifyEndTime = (string) $v;
        }
        if (($v = $data['modify_start_time'] ?? null) !== null) {
            $obj->modifyStartTime = (string) $v;
        }
        return $obj;
    }
}
