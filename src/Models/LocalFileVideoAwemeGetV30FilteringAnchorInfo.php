<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoAwemeGetV30FilteringAnchorInfo implements \JsonSerializable
{
    /**
     * 要查的视频挂锚点类型数组
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes[]
     */
    protected ?array $anchorTypes = null;

    /**
     * 选的门店ids，anchor_types传了5的时候必传
     * @var int[]
     */
    protected ?array $poiIds = null;

    /**
     * 选的商品ids，anchor_types传了6的时候必传
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 要查的视频挂锚点类型数组
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes[]
     */
    public function getAnchorTypes(): ?array
    {
        return $this->anchorTypes;
    }

    /**
     * 要查的视频挂锚点类型数组
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfoAnchorTypes[] $anchorTypes
     * @return self
     */
    public function setAnchorTypes(?array $anchorTypes): self
    {
        $this->anchorTypes = $anchorTypes;
        return $this;
    }

    /**
     * 选的门店ids，anchor_types传了5的时候必传
     * @return int[]
     */
    public function getPoiIds(): ?array
    {
        return $this->poiIds;
    }

    /**
     * 选的门店ids，anchor_types传了5的时候必传
     * @param int[] $poiIds
     * @return self
     */
    public function setPoiIds(?array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    /**
     * 选的商品ids，anchor_types传了6的时候必传
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 选的商品ids，anchor_types传了6的时候必传
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorTypes !== null) {
            $result['anchor_types'] = $this->anchorTypes;
        }
        if ($this->poiIds !== null) {
            $result['poi_ids'] = $this->poiIds;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_types'] ?? null) !== null && is_array($v)) {
            $obj->anchorTypes = $v;
        }
        if (($v = $data['poi_ids'] ?? null) !== null && is_array($v)) {
            $obj->poiIds = $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        return $obj;
    }
}
