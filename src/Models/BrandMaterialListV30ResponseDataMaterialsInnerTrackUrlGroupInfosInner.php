<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $dayList = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo = null;

    /**
     * @return string[]
     */
    public function getDayList(): ?array
    {
        return $this->dayList;
    }

    /**
     * @param string[] $dayList
     * @return self
     */
    public function setDayList(?array $dayList): self
    {
        $this->dayList = $dayList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo): self
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
        if ($this->dayList !== null) {
            $result['day_list'] = $this->dayList;
        }
        if ($this->trackUrlInfo !== null) {
            $result['track_url_info'] = $this->trackUrlInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['day_list'] ?? null) !== null && is_array($v)) {
            $obj->dayList = $v;
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerTrackUrlGroupInfosInnerTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
