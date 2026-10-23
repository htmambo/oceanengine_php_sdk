<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectListV30ResponseDataProjectListInnerPoiInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAllPoiMode
     */
    protected ?string $allPoiMode = null;

    /**
     * @var \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois
     */
    protected ?string $autoUpdatePois = null;

    /**
     * 多门店推广门店数量，仅推广多门店时返回
     * @var int
     */
    protected ?int $multiPoiNum = null;

    /**
     * 单门店id，仅单门店项目返回，多门店不返回
     * @var int
     */
    protected ?int $poiId = null;

    /**
     * 单门店头图
     * @var string
     */
    protected ?string $poiImageUrl = null;

    /**
     * 单门店名称，仅单门店项目返回，多门店不返回
     * @var string
     */
    protected ?string $poiName = null;

    /**
     * @return \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAllPoiMode
     */
    public function getAllPoiMode(): ?string
    {
        return $this->allPoiMode;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAllPoiMode $allPoiMode
     * @return self
     */
    public function setAllPoiMode(?string $allPoiMode): self
    {
        $this->allPoiMode = $allPoiMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois
     */
    public function getAutoUpdatePois(): ?string
    {
        return $this->autoUpdatePois;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois $autoUpdatePois
     * @return self
     */
    public function setAutoUpdatePois(?string $autoUpdatePois): self
    {
        $this->autoUpdatePois = $autoUpdatePois;
        return $this;
    }

    /**
     * 多门店推广门店数量，仅推广多门店时返回
     * @return int
     */
    public function getMultiPoiNum(): ?int
    {
        return $this->multiPoiNum;
    }

    /**
     * 多门店推广门店数量，仅推广多门店时返回
     * @param int $multiPoiNum
     * @return self
     */
    public function setMultiPoiNum(?int $multiPoiNum): self
    {
        $this->multiPoiNum = $multiPoiNum;
        return $this;
    }

    /**
     * 单门店id，仅单门店项目返回，多门店不返回
     * @return int
     */
    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * 单门店id，仅单门店项目返回，多门店不返回
     * @param int $poiId
     * @return self
     */
    public function setPoiId(?int $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * 单门店头图
     * @return string
     */
    public function getPoiImageUrl(): ?string
    {
        return $this->poiImageUrl;
    }

    /**
     * 单门店头图
     * @param string $poiImageUrl
     * @return self
     */
    public function setPoiImageUrl(?string $poiImageUrl): self
    {
        $this->poiImageUrl = $poiImageUrl;
        return $this;
    }

    /**
     * 单门店名称，仅单门店项目返回，多门店不返回
     * @return string
     */
    public function getPoiName(): ?string
    {
        return $this->poiName;
    }

    /**
     * 单门店名称，仅单门店项目返回，多门店不返回
     * @param string $poiName
     * @return self
     */
    public function setPoiName(?string $poiName): self
    {
        $this->poiName = $poiName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allPoiMode !== null) {
            $result['all_poi_mode'] = $this->allPoiMode;
        }
        if ($this->autoUpdatePois !== null) {
            $result['auto_update_pois'] = $this->autoUpdatePois;
        }
        if ($this->multiPoiNum !== null) {
            $result['multi_poi_num'] = $this->multiPoiNum;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->poiImageUrl !== null) {
            $result['poi_image_url'] = $this->poiImageUrl;
        }
        if ($this->poiName !== null) {
            $result['poi_name'] = $this->poiName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_poi_mode'] ?? null) !== null) {
            $obj->allPoiMode = (string) $v;
        }
        if (($v = $data['auto_update_pois'] ?? null) !== null) {
            $obj->autoUpdatePois = (string) $v;
        }
        if (($v = $data['multi_poi_num'] ?? null) !== null) {
            $obj->multiPoiNum = (int) $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (int) $v;
        }
        if (($v = $data['poi_image_url'] ?? null) !== null) {
            $obj->poiImageUrl = (string) $v;
        }
        if (($v = $data['poi_name'] ?? null) !== null) {
            $obj->poiName = (string) $v;
        }
        return $obj;
    }
}
