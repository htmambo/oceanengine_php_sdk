<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectListV30ResponseDataProjectListInnerPoiInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAllPoiMode
     */
    protected ?string $allPoiMode = null;

    /**
     * @var \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids
     */
    protected ?string $autoUpdatePoids = null;

    /**
     * 推门店数量
     * @var int
     */
    protected ?int $multiPoiNum = null;

    /**
     * 门店 id，仅投放单门店项目返回，投放多门店时不返回
     * @var int
     */
    protected ?int $poiId = null;

    /**
     * 门店头图，仅投放单门店项目返回，投放多门店时不返回
     * @var string
     */
    protected ?string $poiImageUrl = null;

    /**
     * 门店名称，仅投放单门店项目返回，投放多门店时不返回
     * @var string
     */
    protected ?string $poiName = null;

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAllPoiMode
     */
    public function getAllPoiMode(): ?string
    {
        return $this->allPoiMode;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAllPoiMode $allPoiMode
     * @return self
     */
    public function setAllPoiMode(?string $allPoiMode): self
    {
        $this->allPoiMode = $allPoiMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids
     */
    public function getAutoUpdatePoids(): ?string
    {
        return $this->autoUpdatePoids;
    }

    /**
     * @param \Oceanengine\Models\LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids $autoUpdatePoids
     * @return self
     */
    public function setAutoUpdatePoids(?string $autoUpdatePoids): self
    {
        $this->autoUpdatePoids = $autoUpdatePoids;
        return $this;
    }

    /**
     * 推门店数量
     * @return int
     */
    public function getMultiPoiNum(): ?int
    {
        return $this->multiPoiNum;
    }

    /**
     * 推门店数量
     * @param int $multiPoiNum
     * @return self
     */
    public function setMultiPoiNum(?int $multiPoiNum): self
    {
        $this->multiPoiNum = $multiPoiNum;
        return $this;
    }

    /**
     * 门店 id，仅投放单门店项目返回，投放多门店时不返回
     * @return int
     */
    public function getPoiId(): ?int
    {
        return $this->poiId;
    }

    /**
     * 门店 id，仅投放单门店项目返回，投放多门店时不返回
     * @param int $poiId
     * @return self
     */
    public function setPoiId(?int $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * 门店头图，仅投放单门店项目返回，投放多门店时不返回
     * @return string
     */
    public function getPoiImageUrl(): ?string
    {
        return $this->poiImageUrl;
    }

    /**
     * 门店头图，仅投放单门店项目返回，投放多门店时不返回
     * @param string $poiImageUrl
     * @return self
     */
    public function setPoiImageUrl(?string $poiImageUrl): self
    {
        $this->poiImageUrl = $poiImageUrl;
        return $this;
    }

    /**
     * 门店名称，仅投放单门店项目返回，投放多门店时不返回
     * @return string
     */
    public function getPoiName(): ?string
    {
        return $this->poiName;
    }

    /**
     * 门店名称，仅投放单门店项目返回，投放多门店时不返回
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
        if ($this->autoUpdatePoids !== null) {
            $result['auto_update_poids'] = $this->autoUpdatePoids;
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
        if (($v = $data['auto_update_poids'] ?? null) !== null) {
            $obj->autoUpdatePoids = (string) $v;
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
