<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationGetV30ResponseDataIndustriesInner implements \JsonSerializable
{
    /**
     * 一级行业ID
     * @var int
     */
    protected ?int $industry1Id = null;

    /**
     * 一级行业名称
     * @var string
     */
    protected ?string $industry1Name = null;

    /**
     * 二级行业ID
     * @var int
     */
    protected ?int $industry2Id = null;

    /**
     * 二级行业名称
     * @var string
     */
    protected ?string $industry2Name = null;

    /**
     * 三级行业ID
     * @var int
     */
    protected ?int $industry3Id = null;

    /**
     * 三级行业名称
     * @var string
     */
    protected ?string $industry3Name = null;

    /**
     * 是否是历史的补充资质及推广资质，如果是，则行业相关字段无值，重新提交时需归档到具体行业下
     * @var bool
     */
    protected ?bool $isHistory = null;

    /**
     * 开户资质列表，相关字段见下
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerOthersInner[]
     */
    protected ?array $others = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion
     */
    protected ?\Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion $promotion = null;

    /**
     * 一级行业ID
     * @return int
     */
    public function getIndustry1Id(): ?int
    {
        return $this->industry1Id;
    }

    /**
     * 一级行业ID
     * @param int $industry1Id
     * @return self
     */
    public function setIndustry1Id(?int $industry1Id): self
    {
        $this->industry1Id = $industry1Id;
        return $this;
    }

    /**
     * 一级行业名称
     * @return string
     */
    public function getIndustry1Name(): ?string
    {
        return $this->industry1Name;
    }

    /**
     * 一级行业名称
     * @param string $industry1Name
     * @return self
     */
    public function setIndustry1Name(?string $industry1Name): self
    {
        $this->industry1Name = $industry1Name;
        return $this;
    }

    /**
     * 二级行业ID
     * @return int
     */
    public function getIndustry2Id(): ?int
    {
        return $this->industry2Id;
    }

    /**
     * 二级行业ID
     * @param int $industry2Id
     * @return self
     */
    public function setIndustry2Id(?int $industry2Id): self
    {
        $this->industry2Id = $industry2Id;
        return $this;
    }

    /**
     * 二级行业名称
     * @return string
     */
    public function getIndustry2Name(): ?string
    {
        return $this->industry2Name;
    }

    /**
     * 二级行业名称
     * @param string $industry2Name
     * @return self
     */
    public function setIndustry2Name(?string $industry2Name): self
    {
        $this->industry2Name = $industry2Name;
        return $this;
    }

    /**
     * 三级行业ID
     * @return int
     */
    public function getIndustry3Id(): ?int
    {
        return $this->industry3Id;
    }

    /**
     * 三级行业ID
     * @param int $industry3Id
     * @return self
     */
    public function setIndustry3Id(?int $industry3Id): self
    {
        $this->industry3Id = $industry3Id;
        return $this;
    }

    /**
     * 三级行业名称
     * @return string
     */
    public function getIndustry3Name(): ?string
    {
        return $this->industry3Name;
    }

    /**
     * 三级行业名称
     * @param string $industry3Name
     * @return self
     */
    public function setIndustry3Name(?string $industry3Name): self
    {
        $this->industry3Name = $industry3Name;
        return $this;
    }

    /**
     * 是否是历史的补充资质及推广资质，如果是，则行业相关字段无值，重新提交时需归档到具体行业下
     * @return bool
     */
    public function getIsHistory(): ?bool
    {
        return $this->isHistory;
    }

    /**
     * 是否是历史的补充资质及推广资质，如果是，则行业相关字段无值，重新提交时需归档到具体行业下
     * @param bool $isHistory
     * @return self
     */
    public function setIsHistory(?bool $isHistory): self
    {
        $this->isHistory = $isHistory;
        return $this;
    }

    /**
     * 开户资质列表，相关字段见下
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerOthersInner[]
     */
    public function getOthers(): ?array
    {
        return $this->others;
    }

    /**
     * 开户资质列表，相关字段见下
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerOthersInner[] $others
     * @return self
     */
    public function setOthers(?array $others): self
    {
        $this->others = $others;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion
     */
    public function getPromotion(): ?\Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion
    {
        return $this->promotion;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion $promotion
     * @return self
     */
    public function setPromotion(?\Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion $promotion): self
    {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industry1Id !== null) {
            $result['industry1_id'] = $this->industry1Id;
        }
        if ($this->industry1Name !== null) {
            $result['industry1_name'] = $this->industry1Name;
        }
        if ($this->industry2Id !== null) {
            $result['industry2_id'] = $this->industry2Id;
        }
        if ($this->industry2Name !== null) {
            $result['industry2_name'] = $this->industry2Name;
        }
        if ($this->industry3Id !== null) {
            $result['industry3_id'] = $this->industry3Id;
        }
        if ($this->industry3Name !== null) {
            $result['industry3_name'] = $this->industry3Name;
        }
        if ($this->isHistory !== null) {
            $result['is_history'] = $this->isHistory;
        }
        if ($this->others !== null) {
            $result['others'] = $this->others;
        }
        if ($this->promotion !== null) {
            $result['promotion'] = $this->promotion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry1_id'] ?? null) !== null) {
            $obj->industry1Id = (int) $v;
        }
        if (($v = $data['industry1_name'] ?? null) !== null) {
            $obj->industry1Name = (string) $v;
        }
        if (($v = $data['industry2_id'] ?? null) !== null) {
            $obj->industry2Id = (int) $v;
        }
        if (($v = $data['industry2_name'] ?? null) !== null) {
            $obj->industry2Name = (string) $v;
        }
        if (($v = $data['industry3_id'] ?? null) !== null) {
            $obj->industry3Id = (int) $v;
        }
        if (($v = $data['industry3_name'] ?? null) !== null) {
            $obj->industry3Name = (string) $v;
        }
        if (($v = $data['is_history'] ?? null) !== null) {
            $obj->isHistory = (bool) $v;
        }
        if (($v = $data['others'] ?? null) !== null && is_array($v)) {
            $obj->others = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerOthersInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion'] ?? null) !== null && is_array($v)) {
            $obj->promotion = \Oceanengine\Models\AdvertiserQualificationGetV30ResponseDataIndustriesInnerPromotion::fromArray($v);
        }
        return $obj;
    }
}
