<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaCheckIndexEntryProgressV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 文件拉取日期，case:\"20230331\"
     * @var string
     */
    protected ?string $indexPullDate = null;

    /**
     * 当天文件拉取次数，从1起
     * @var int
     */
    protected ?int $indexPullTime = null;

    /**
     * 商品库ID ，可通过【获取商品库信息】获取
     * @var int
     */
    protected ?int $productPlatformId = null;

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
     * 文件拉取日期，case:\"20230331\"
     * @return string
     */
    public function getIndexPullDate(): ?string
    {
        return $this->indexPullDate;
    }

    /**
     * 文件拉取日期，case:\"20230331\"
     * @param string $indexPullDate
     * @return self
     */
    public function setIndexPullDate(?string $indexPullDate): self
    {
        $this->indexPullDate = $indexPullDate;
        return $this;
    }

    /**
     * 当天文件拉取次数，从1起
     * @return int
     */
    public function getIndexPullTime(): ?int
    {
        return $this->indexPullTime;
    }

    /**
     * 当天文件拉取次数，从1起
     * @param int $indexPullTime
     * @return self
     */
    public function setIndexPullTime(?int $indexPullTime): self
    {
        $this->indexPullTime = $indexPullTime;
        return $this;
    }

    /**
     * 商品库ID ，可通过【获取商品库信息】获取
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * 商品库ID ，可通过【获取商品库信息】获取
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
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
        if ($this->indexPullDate !== null) {
            $result['index_pull_date'] = $this->indexPullDate;
        }
        if ($this->indexPullTime !== null) {
            $result['index_pull_time'] = $this->indexPullTime;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['index_pull_date'] ?? null) !== null) {
            $obj->indexPullDate = (string) $v;
        }
        if (($v = $data['index_pull_time'] ?? null) !== null) {
            $obj->indexPullTime = (int) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        return $obj;
    }
}
