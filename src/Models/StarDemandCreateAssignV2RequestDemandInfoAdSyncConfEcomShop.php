<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop implements \JsonSerializable
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
     * 是否自动投放 0或不填 = 否；1 = 是
     * @var int
     */
    protected ?int $autoSync = null;

    /**
     * 抖店商家后台店铺ID列表（不超过500个）
     * @var int[]
     */
    protected ?array $shopIds = null;

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
     * 抖店商家后台店铺ID列表（不超过500个）
     * @return int[]
     */
    public function getShopIds(): ?array
    {
        return $this->shopIds;
    }

    /**
     * 抖店商家后台店铺ID列表（不超过500个）
     * @param int[] $shopIds
     * @return self
     */
    public function setShopIds(?array $shopIds): self
    {
        $this->shopIds = $shopIds;
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
        if ($this->autoSync !== null) {
            $result['auto_sync'] = $this->autoSync;
        }
        if ($this->shopIds !== null) {
            $result['shop_ids'] = $this->shopIds;
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
        if (($v = $data['auto_sync'] ?? null) !== null) {
            $obj->autoSync = (int) $v;
        }
        if (($v = $data['shop_ids'] ?? null) !== null && is_array($v)) {
            $obj->shopIds = $v;
        }
        if (($v = $data['sync_duration'] ?? null) !== null) {
            $obj->syncDuration = (int) $v;
        }
        return $obj;
    }
}
