<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialAdGetV10ResponseDataAdListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 计划名称
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics $metrics = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告主id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划名称
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * 计划名称
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInnerMetrics::fromArray($v);
        }
        return $obj;
    }
}
