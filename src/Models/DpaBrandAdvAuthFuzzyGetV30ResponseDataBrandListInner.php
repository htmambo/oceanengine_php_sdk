<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus
     */
    protected ?string $availableStatus = null;

    /**
     * 归一化品牌id
     * @var int
     */
    protected ?int $mergeBrandId = null;

    /**
     * 归一化品牌名称
     * @var string
     */
    protected ?string $mergeBrandName = null;

    /**
     * @var \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail
     */
    protected ?\Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail $yuntuBrandDetail = null;

    /**
     * @return \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus
     */
    public function getAvailableStatus(): ?string
    {
        return $this->availableStatus;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus $availableStatus
     * @return self
     */
    public function setAvailableStatus(?string $availableStatus): self
    {
        $this->availableStatus = $availableStatus;
        return $this;
    }

    /**
     * 归一化品牌id
     * @return int
     */
    public function getMergeBrandId(): ?int
    {
        return $this->mergeBrandId;
    }

    /**
     * 归一化品牌id
     * @param int $mergeBrandId
     * @return self
     */
    public function setMergeBrandId(?int $mergeBrandId): self
    {
        $this->mergeBrandId = $mergeBrandId;
        return $this;
    }

    /**
     * 归一化品牌名称
     * @return string
     */
    public function getMergeBrandName(): ?string
    {
        return $this->mergeBrandName;
    }

    /**
     * 归一化品牌名称
     * @param string $mergeBrandName
     * @return self
     */
    public function setMergeBrandName(?string $mergeBrandName): self
    {
        $this->mergeBrandName = $mergeBrandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail
     */
    public function getYuntuBrandDetail(): ?\Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail
    {
        return $this->yuntuBrandDetail;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail $yuntuBrandDetail
     * @return self
     */
    public function setYuntuBrandDetail(?\Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail $yuntuBrandDetail): self
    {
        $this->yuntuBrandDetail = $yuntuBrandDetail;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->availableStatus !== null) {
            $result['available_status'] = $this->availableStatus;
        }
        if ($this->mergeBrandId !== null) {
            $result['merge_brand_id'] = $this->mergeBrandId;
        }
        if ($this->mergeBrandName !== null) {
            $result['merge_brand_name'] = $this->mergeBrandName;
        }
        if ($this->yuntuBrandDetail !== null) {
            $result['yuntu_brand_detail'] = $this->yuntuBrandDetail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['available_status'] ?? null) !== null) {
            $obj->availableStatus = (string) $v;
        }
        if (($v = $data['merge_brand_id'] ?? null) !== null) {
            $obj->mergeBrandId = (int) $v;
        }
        if (($v = $data['merge_brand_name'] ?? null) !== null) {
            $obj->mergeBrandName = (string) $v;
        }
        if (($v = $data['yuntu_brand_detail'] ?? null) !== null && is_array($v)) {
            $obj->yuntuBrandDetail = \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail::fromArray($v);
        }
        return $obj;
    }
}
