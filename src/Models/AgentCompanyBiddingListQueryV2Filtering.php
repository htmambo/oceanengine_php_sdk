<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBiddingListQueryV2Filtering implements \JsonSerializable
{
    /**
     * 广告公司 id 列表，若选填该字段，则最少应上传1个广告主公司id，最多支持同时查询100个广告主公司。
     * @var int[]
     */
    protected ?array $companyIds = null;

    /**
     * 广告主所属公司名称，若选填该字段，限制最小长度为1，最大长度为223。支持模糊查询。
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * 广告公司 id 列表，若选填该字段，则最少应上传1个广告主公司id，最多支持同时查询100个广告主公司。
     * @return int[]
     */
    public function getCompanyIds(): ?array
    {
        return $this->companyIds;
    }

    /**
     * 广告公司 id 列表，若选填该字段，则最少应上传1个广告主公司id，最多支持同时查询100个广告主公司。
     * @param int[] $companyIds
     * @return self
     */
    public function setCompanyIds(?array $companyIds): self
    {
        $this->companyIds = $companyIds;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyIds !== null) {
            $result['company_ids'] = $this->companyIds;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_ids'] ?? null) !== null && is_array($v)) {
            $obj->companyIds = $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        return $obj;
    }
}
