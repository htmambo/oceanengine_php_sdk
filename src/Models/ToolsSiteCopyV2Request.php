<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCopyV2Request implements \JsonSerializable
{
    /**
     * 广告主id，数字范围：1 <= advertiser_id <= MAX_INT64
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 站点id列表, min_size=1, max_size=20
     * @var string[]
     */
    protected ?array $siteIds = null;

    /**
     * 广告主id，数字范围：1 <= advertiser_id <= MAX_INT64
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id，数字范围：1 <= advertiser_id <= MAX_INT64
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 站点id列表, min_size=1, max_size=20
     * @return string[]
     */
    public function getSiteIds(): ?array
    {
        return $this->siteIds;
    }

    /**
     * 站点id列表, min_size=1, max_size=20
     * @param string[] $siteIds
     * @return self
     */
    public function setSiteIds(?array $siteIds): self
    {
        $this->siteIds = $siteIds;
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
        if ($this->siteIds !== null) {
            $result['site_ids'] = $this->siteIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['site_ids'] ?? null) !== null && is_array($v)) {
            $obj->siteIds = $v;
        }
        return $obj;
    }
}
