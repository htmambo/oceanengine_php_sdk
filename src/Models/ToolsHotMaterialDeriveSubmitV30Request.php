<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveSubmitV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $elementIds = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ExcludeStrategies[]
     */
    protected ?array $excludeStrategies = null;

    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var bool
     */
    protected ?bool $removeAiWatermark = null;

    /**
     * @var int[]
     */
    protected ?array $stickerElementIds = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Strategies[]
     */
    protected ?array $strategies = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getElementIds(): ?array
    {
        return $this->elementIds;
    }

    /**
     * @param int[] $elementIds
     * @return self
     */
    public function setElementIds(?array $elementIds): self
    {
        $this->elementIds = $elementIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ExcludeStrategies[]
     */
    public function getExcludeStrategies(): ?array
    {
        return $this->excludeStrategies;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ExcludeStrategies[] $excludeStrategies
     * @return self
     */
    public function setExcludeStrategies(?array $excludeStrategies): self
    {
        $this->excludeStrategies = $excludeStrategies;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRemoveAiWatermark(): ?bool
    {
        return $this->removeAiWatermark;
    }

    /**
     * @param bool $removeAiWatermark
     * @return self
     */
    public function setRemoveAiWatermark(?bool $removeAiWatermark): self
    {
        $this->removeAiWatermark = $removeAiWatermark;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStickerElementIds(): ?array
    {
        return $this->stickerElementIds;
    }

    /**
     * @param int[] $stickerElementIds
     * @return self
     */
    public function setStickerElementIds(?array $stickerElementIds): self
    {
        $this->stickerElementIds = $stickerElementIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Strategies[]
     */
    public function getStrategies(): ?array
    {
        return $this->strategies;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Strategies[] $strategies
     * @return self
     */
    public function setStrategies(?array $strategies): self
    {
        $this->strategies = $strategies;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->elementIds !== null) {
            $result['element_ids'] = $this->elementIds;
        }
        if ($this->excludeStrategies !== null) {
            $result['exclude_strategies'] = $this->excludeStrategies;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->removeAiWatermark !== null) {
            $result['remove_ai_watermark'] = $this->removeAiWatermark;
        }
        if ($this->stickerElementIds !== null) {
            $result['sticker_element_ids'] = $this->stickerElementIds;
        }
        if ($this->strategies !== null) {
            $result['strategies'] = $this->strategies;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['element_ids'] ?? null) !== null && is_array($v)) {
            $obj->elementIds = $v;
        }
        if (($v = $data['exclude_strategies'] ?? null) !== null && is_array($v)) {
            $obj->excludeStrategies = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['remove_ai_watermark'] ?? null) !== null) {
            $obj->removeAiWatermark = (bool) $v;
        }
        if (($v = $data['sticker_element_ids'] ?? null) !== null && is_array($v)) {
            $obj->stickerElementIds = $v;
        }
        if (($v = $data['strategies'] ?? null) !== null && is_array($v)) {
            $obj->strategies = $v;
        }
        return $obj;
    }
}
