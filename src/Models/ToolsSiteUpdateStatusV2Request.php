<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateStatusV2Request implements \JsonSerializable
{
    /**
     * 广告主id， 传的这个advertiser_id的数字的范围：1 <= advertiser_id <= MAX_INT64
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 橙子建站站点id列表 ：1 <= 长度 <= 20
     * @var string[]
     */
    protected ?array $siteIds = null;

    /**
     * 站点操作状态
     * @var string
     */
    protected ?string $status = null;

    /**
     * 广告主id， 传的这个advertiser_id的数字的范围：1 <= advertiser_id <= MAX_INT64
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id， 传的这个advertiser_id的数字的范围：1 <= advertiser_id <= MAX_INT64
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 橙子建站站点id列表 ：1 <= 长度 <= 20
     * @return string[]
     */
    public function getSiteIds(): ?array
    {
        return $this->siteIds;
    }

    /**
     * 橙子建站站点id列表 ：1 <= 长度 <= 20
     * @param string[] $siteIds
     * @return self
     */
    public function setSiteIds(?array $siteIds): self
    {
        $this->siteIds = $siteIds;
        return $this;
    }

    /**
     * 站点操作状态
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 站点操作状态
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->status !== null) {
            $result['status'] = $this->status;
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
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
