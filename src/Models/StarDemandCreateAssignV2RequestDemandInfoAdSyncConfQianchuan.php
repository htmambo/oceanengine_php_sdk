<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan implements \JsonSerializable
{
    /**
     * 是否用于视频素材投放（头像跳落地页）：2=是；1=否（用于原视频投放） 默认推送素材（为2，头像跳落地页）。内容服务为2不可改
     * @var int
     */
    protected ?int $adSync = null;

    /**
     * 是否投放原生视频 0或不填 = 否；1 = 是
     * @var int
     */
    protected ?int $adSyncOrigin = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 多广告主id
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 是否自动投放 0或不填 = 否；1 = 是
     * @var int
     */
    protected ?int $autoSync = null;

    /**
     * 推广产品链接
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * 推广产品图片文件名（材料上传接口中使用到的文件名）
     * @var string[]
     */
    protected ?array $productPics = null;

    /**
     * 投放原生视频的投放时间（单位：天） 大于0的整数
     * @var int
     */
    protected ?int $syncDuration = null;

    /**
     * 是否用于视频素材投放（头像跳落地页）：2=是；1=否（用于原视频投放） 默认推送素材（为2，头像跳落地页）。内容服务为2不可改
     * @return int
     */
    public function getAdSync(): ?int
    {
        return $this->adSync;
    }

    /**
     * 是否用于视频素材投放（头像跳落地页）：2=是；1=否（用于原视频投放） 默认推送素材（为2，头像跳落地页）。内容服务为2不可改
     * @param int $adSync
     * @return self
     */
    public function setAdSync(?int $adSync): self
    {
        $this->adSync = $adSync;
        return $this;
    }

    /**
     * 是否投放原生视频 0或不填 = 否；1 = 是
     * @return int
     */
    public function getAdSyncOrigin(): ?int
    {
        return $this->adSyncOrigin;
    }

    /**
     * 是否投放原生视频 0或不填 = 否；1 = 是
     * @param int $adSyncOrigin
     * @return self
     */
    public function setAdSyncOrigin(?int $adSyncOrigin): self
    {
        $this->adSyncOrigin = $adSyncOrigin;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 多广告主id
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 多广告主id
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 是否自动投放 0或不填 = 否；1 = 是
     * @return int
     */
    public function getAutoSync(): ?int
    {
        return $this->autoSync;
    }

    /**
     * 是否自动投放 0或不填 = 否；1 = 是
     * @param int $autoSync
     * @return self
     */
    public function setAutoSync(?int $autoSync): self
    {
        $this->autoSync = $autoSync;
        return $this;
    }

    /**
     * 推广产品链接
     * @return string
     */
    public function getProductLink(): ?string
    {
        return $this->productLink;
    }

    /**
     * 推广产品链接
     * @param string $productLink
     * @return self
     */
    public function setProductLink(?string $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }

    /**
     * 推广产品图片文件名（材料上传接口中使用到的文件名）
     * @return string[]
     */
    public function getProductPics(): ?array
    {
        return $this->productPics;
    }

    /**
     * 推广产品图片文件名（材料上传接口中使用到的文件名）
     * @param string[] $productPics
     * @return self
     */
    public function setProductPics(?array $productPics): self
    {
        $this->productPics = $productPics;
        return $this;
    }

    /**
     * 投放原生视频的投放时间（单位：天） 大于0的整数
     * @return int
     */
    public function getSyncDuration(): ?int
    {
        return $this->syncDuration;
    }

    /**
     * 投放原生视频的投放时间（单位：天） 大于0的整数
     * @param int $syncDuration
     * @return self
     */
    public function setSyncDuration(?int $syncDuration): self
    {
        $this->syncDuration = $syncDuration;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adSync !== null) {
            $result['ad_sync'] = $this->adSync;
        }
        if ($this->adSyncOrigin !== null) {
            $result['ad_sync_origin'] = $this->adSyncOrigin;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->autoSync !== null) {
            $result['auto_sync'] = $this->autoSync;
        }
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        if ($this->productPics !== null) {
            $result['product_pics'] = $this->productPics;
        }
        if ($this->syncDuration !== null) {
            $result['sync_duration'] = $this->syncDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_sync'] ?? null) !== null) {
            $obj->adSync = (int) $v;
        }
        if (($v = $data['ad_sync_origin'] ?? null) !== null) {
            $obj->adSyncOrigin = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['auto_sync'] ?? null) !== null) {
            $obj->autoSync = (int) $v;
        }
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        if (($v = $data['product_pics'] ?? null) !== null && is_array($v)) {
            $obj->productPics = $v;
        }
        if (($v = $data['sync_duration'] ?? null) !== null) {
            $obj->syncDuration = (int) $v;
        }
        return $obj;
    }
}
