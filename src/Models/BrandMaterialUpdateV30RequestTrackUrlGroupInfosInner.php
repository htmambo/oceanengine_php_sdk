<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestTrackUrlGroupInfosInner implements \JsonSerializable
{
    /**
     * 监测链接配置周期
     * @var string[]
     */
    protected ?array $dayList = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo = null;

    /**
     * 监测链接配置周期
     * @return string[]
     */
    public function getDayList(): ?array
    {
        return $this->dayList;
    }

    /**
     * 监测链接配置周期
     * @param string[] $dayList
     * @return self
     */
    public function setDayList(?array $dayList): self
    {
        $this->dayList = $dayList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo $trackUrlInfo): self
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
            $obj->trackUrlInfo = \Oceanengine\Models\BrandMaterialUpdateV30RequestTrackUrlGroupInfosInnerTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
