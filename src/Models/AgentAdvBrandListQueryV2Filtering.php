<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvBrandListQueryV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvBrandListQueryV2FilteringAccountStatus
     */
    protected ?string $accountStatus = null;

    /**
     * 广告主 id 列表，若选填该字段，则最少应上传1个广告主id，最多支持同时查询100个广告主。
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @var string
     */
    protected ?string $firstIndustry = null;

    /**
     * 二级行业名称。可从【获取行业列表】接口获取
     * @var string
     */
    protected ?string $secondIndustry = null;

    /**
     * @return \Oceanengine\Models\AgentAdvBrandListQueryV2FilteringAccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvBrandListQueryV2FilteringAccountStatus $accountStatus
     * @return self
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    /**
     * 广告主 id 列表，若选填该字段，则最少应上传1个广告主id，最多支持同时查询100个广告主。
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主 id 列表，若选填该字段，则最少应上传1个广告主id，最多支持同时查询100个广告主。
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @return string
     */
    public function getFirstIndustry(): ?string
    {
        return $this->firstIndustry;
    }

    /**
     * 一级行业名称。可从【获取行业列表】接口获取。
     * @param string $firstIndustry
     * @return self
     */
    public function setFirstIndustry(?string $firstIndustry): self
    {
        $this->firstIndustry = $firstIndustry;
        return $this;
    }

    /**
     * 二级行业名称。可从【获取行业列表】接口获取
     * @return string
     */
    public function getSecondIndustry(): ?string
    {
        return $this->secondIndustry;
    }

    /**
     * 二级行业名称。可从【获取行业列表】接口获取
     * @param string $secondIndustry
     * @return self
     */
    public function setSecondIndustry(?string $secondIndustry): self
    {
        $this->secondIndustry = $secondIndustry;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountStatus !== null) {
            $result['account_status'] = $this->accountStatus;
        }
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->firstIndustry !== null) {
            $result['first_industry'] = $this->firstIndustry;
        }
        if ($this->secondIndustry !== null) {
            $result['second_industry'] = $this->secondIndustry;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_status'] ?? null) !== null) {
            $obj->accountStatus = (string) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['first_industry'] ?? null) !== null) {
            $obj->firstIndustry = (string) $v;
        }
        if (($v = $data['second_industry'] ?? null) !== null) {
            $obj->secondIndustry = (string) $v;
        }
        return $obj;
    }
}
