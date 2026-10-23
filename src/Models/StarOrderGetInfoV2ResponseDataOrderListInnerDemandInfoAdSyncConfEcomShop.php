<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop implements \JsonSerializable
{
    /**
     * 用于视频素材投放（头像跳落地页） 2=是；1=否
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
     * 是否自动投放 0或不填 = 否；1 = 是
     * @var int
     */
    protected ?int $autoSync = null;

    /**
     * 自动推送素材包的平台 2-内容热推；3-内容服务
     * @var int[]
     */
    protected ?array $autoSyncSpecifyMaterialPlatforms = null;

    /**
     * 推DOU+时可以使用此字段完成抖音UID至广告主ID的转换。若存在advertiser_id则忽略该参数。
     * @var int
     */
    protected ?int $douPlusUid = null;

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
     * 抖店商家后台店铺ID列表
     * @var int[]
     */
    protected ?array $shopIds = null;

    /**
     * 投放原生视频的投放时间（单位：天）
     * @var int
     */
    protected ?int $syncDuration = null;

    /**
     * 用于视频素材投放（头像跳落地页） 2=是；1=否
     * @return int
     */
    public function getAdSync(): ?int
    {
        return $this->adSync;
    }

    /**
     * 用于视频素材投放（头像跳落地页） 2=是；1=否
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
     * 自动推送素材包的平台 2-内容热推；3-内容服务
     * @return int[]
     */
    public function getAutoSyncSpecifyMaterialPlatforms(): ?array
    {
        return $this->autoSyncSpecifyMaterialPlatforms;
    }

    /**
     * 自动推送素材包的平台 2-内容热推；3-内容服务
     * @param int[] $autoSyncSpecifyMaterialPlatforms
     * @return self
     */
    public function setAutoSyncSpecifyMaterialPlatforms(?array $autoSyncSpecifyMaterialPlatforms): self
    {
        $this->autoSyncSpecifyMaterialPlatforms = $autoSyncSpecifyMaterialPlatforms;
        return $this;
    }

    /**
     * 推DOU+时可以使用此字段完成抖音UID至广告主ID的转换。若存在advertiser_id则忽略该参数。
     * @return int
     */
    public function getDouPlusUid(): ?int
    {
        return $this->douPlusUid;
    }

    /**
     * 推DOU+时可以使用此字段完成抖音UID至广告主ID的转换。若存在advertiser_id则忽略该参数。
     * @param int $douPlusUid
     * @return self
     */
    public function setDouPlusUid(?int $douPlusUid): self
    {
        $this->douPlusUid = $douPlusUid;
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
     * 抖店商家后台店铺ID列表
     * @return int[]
     */
    public function getShopIds(): ?array
    {
        return $this->shopIds;
    }

    /**
     * 抖店商家后台店铺ID列表
     * @param int[] $shopIds
     * @return self
     */
    public function setShopIds(?array $shopIds): self
    {
        $this->shopIds = $shopIds;
        return $this;
    }

    /**
     * 投放原生视频的投放时间（单位：天）
     * @return int
     */
    public function getSyncDuration(): ?int
    {
        return $this->syncDuration;
    }

    /**
     * 投放原生视频的投放时间（单位：天）
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
        if ($this->autoSync !== null) {
            $result['auto_sync'] = $this->autoSync;
        }
        if ($this->autoSyncSpecifyMaterialPlatforms !== null) {
            $result['auto_sync_specify_material_platforms'] = $this->autoSyncSpecifyMaterialPlatforms;
        }
        if ($this->douPlusUid !== null) {
            $result['dou_plus_uid'] = $this->douPlusUid;
        }
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        if ($this->productPics !== null) {
            $result['product_pics'] = $this->productPics;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auto_sync'] ?? null) !== null) {
            $obj->autoSync = (int) $v;
        }
        if (($v = $data['auto_sync_specify_material_platforms'] ?? null) !== null && is_array($v)) {
            $obj->autoSyncSpecifyMaterialPlatforms = $v;
        }
        if (($v = $data['dou_plus_uid'] ?? null) !== null) {
            $obj->douPlusUid = (int) $v;
        }
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        if (($v = $data['product_pics'] ?? null) !== null && is_array($v)) {
            $obj->productPics = $v;
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
