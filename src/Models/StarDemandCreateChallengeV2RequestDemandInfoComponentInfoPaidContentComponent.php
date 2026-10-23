<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoComponentInfoPaidContentComponent implements \JsonSerializable
{
    /**
     * 抖音号
     * @var string
     */
    protected ?string $douyinId = null;

    /**
     * 商品ID（可不填）
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 短剧ID（必填）
     * @var int
     */
    protected ?int $seriesId = null;

    /**
     * 抖音号
     * @return string
     */
    public function getDouyinId(): ?string
    {
        return $this->douyinId;
    }

    /**
     * 抖音号
     * @param string $douyinId
     * @return self
     */
    public function setDouyinId(?string $douyinId): self
    {
        $this->douyinId = $douyinId;
        return $this;
    }

    /**
     * 商品ID（可不填）
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID（可不填）
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 短剧ID（必填）
     * @return int
     */
    public function getSeriesId(): ?int
    {
        return $this->seriesId;
    }

    /**
     * 短剧ID（必填）
     * @param int $seriesId
     * @return self
     */
    public function setSeriesId(?int $seriesId): self
    {
        $this->seriesId = $seriesId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->douyinId !== null) {
            $result['douyin_id'] = $this->douyinId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->seriesId !== null) {
            $result['series_id'] = $this->seriesId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['douyin_id'] ?? null) !== null) {
            $obj->douyinId = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['series_id'] ?? null) !== null) {
            $obj->seriesId = (int) $v;
        }
        return $obj;
    }
}
