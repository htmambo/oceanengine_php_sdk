<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdOverallMarketingUpdateV10Request implements \JsonSerializable
{
    /**
     * 批量升级列表
     * @var \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10RequestAdIdListInner[]
     */
    protected ?array $adIdList = null;

    /**
     * 广告主ID，AdvID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 批量升级列表
     * @return \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10RequestAdIdListInner[]
     */
    public function getAdIdList(): ?array
    {
        return $this->adIdList;
    }

    /**
     * 批量升级列表
     * @param \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10RequestAdIdListInner[] $adIdList
     * @return self
     */
    public function setAdIdList(?array $adIdList): self
    {
        $this->adIdList = $adIdList;
        return $this;
    }

    /**
     * 广告主ID，AdvID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID，AdvID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIdList !== null) {
            $result['ad_id_list'] = $this->adIdList;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id_list'] ?? null) !== null && is_array($v)) {
            $obj->adIdList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10RequestAdIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        return $obj;
    }
}
