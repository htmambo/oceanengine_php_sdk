<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 推广产品pkg_id列表，支持传入多个批量删除，list长度1~50
     * @var int[]
     */
    protected ?array $pkgIds = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 推广产品pkg_id列表，支持传入多个批量删除，list长度1~50
     * @return int[]
     */
    public function getPkgIds(): ?array
    {
        return $this->pkgIds;
    }

    /**
     * 推广产品pkg_id列表，支持传入多个批量删除，list长度1~50
     * @param int[] $pkgIds
     * @return self
     */
    public function setPkgIds(?array $pkgIds): self
    {
        $this->pkgIds = $pkgIds;
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
        if ($this->pkgIds !== null) {
            $result['pkg_ids'] = $this->pkgIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['pkg_ids'] ?? null) !== null && is_array($v)) {
            $obj->pkgIds = $v;
        }
        return $obj;
    }
}
