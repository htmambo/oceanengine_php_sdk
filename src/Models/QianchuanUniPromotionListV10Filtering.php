<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10Filtering implements \JsonSerializable
{
    /**
     * 计划创建结束日期，时间格式 YYYY-MM-DD
     * @var string
     */
    protected ?string $createEndDate = null;

    /**
     * 计划创建开始日期，时间格式 YYYY-MM-DD
     * @var string
     */
    protected ?string $createStartDate = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10FilteringHavingCost
     */
    protected ?string $havingCost = null;

    /**
     * 计划编辑结束日期，时间格式 2021-04-05 00:00:00
     * @var string
     */
    protected ?string $modifyEndDate = null;

    /**
     * 计划编辑开始日期，时间格式 2021-04-05 00:00:00
     * @var string
     */
    protected ?string $modifyStartDate = null;

    /**
     * 搜索关键词，支持根据计划名称/ID搜索
     * @var string
     */
    protected ?string $searchKeyword = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSearchKeywordType
     */
    protected ?string $searchKeywordType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10FilteringStatus
     */
    protected ?string $status = null;

    /**
     * 计划创建结束日期，时间格式 YYYY-MM-DD
     * @return string
     */
    public function getCreateEndDate(): ?string
    {
        return $this->createEndDate;
    }

    /**
     * 计划创建结束日期，时间格式 YYYY-MM-DD
     * @param string $createEndDate
     * @return self
     */
    public function setCreateEndDate(?string $createEndDate): self
    {
        $this->createEndDate = $createEndDate;
        return $this;
    }

    /**
     * 计划创建开始日期，时间格式 YYYY-MM-DD
     * @return string
     */
    public function getCreateStartDate(): ?string
    {
        return $this->createStartDate;
    }

    /**
     * 计划创建开始日期，时间格式 YYYY-MM-DD
     * @param string $createStartDate
     * @return self
     */
    public function setCreateStartDate(?string $createStartDate): self
    {
        $this->createStartDate = $createStartDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10FilteringHavingCost
     */
    public function getHavingCost(): ?string
    {
        return $this->havingCost;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10FilteringHavingCost $havingCost
     * @return self
     */
    public function setHavingCost(?string $havingCost): self
    {
        $this->havingCost = $havingCost;
        return $this;
    }

    /**
     * 计划编辑结束日期，时间格式 2021-04-05 00:00:00
     * @return string
     */
    public function getModifyEndDate(): ?string
    {
        return $this->modifyEndDate;
    }

    /**
     * 计划编辑结束日期，时间格式 2021-04-05 00:00:00
     * @param string $modifyEndDate
     * @return self
     */
    public function setModifyEndDate(?string $modifyEndDate): self
    {
        $this->modifyEndDate = $modifyEndDate;
        return $this;
    }

    /**
     * 计划编辑开始日期，时间格式 2021-04-05 00:00:00
     * @return string
     */
    public function getModifyStartDate(): ?string
    {
        return $this->modifyStartDate;
    }

    /**
     * 计划编辑开始日期，时间格式 2021-04-05 00:00:00
     * @param string $modifyStartDate
     * @return self
     */
    public function setModifyStartDate(?string $modifyStartDate): self
    {
        $this->modifyStartDate = $modifyStartDate;
        return $this;
    }

    /**
     * 搜索关键词，支持根据计划名称/ID搜索
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
     * 搜索关键词，支持根据计划名称/ID搜索
     * @param string $searchKeyword
     * @return self
     */
    public function setSearchKeyword(?string $searchKeyword): self
    {
        $this->searchKeyword = $searchKeyword;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSearchKeywordType
     */
    public function getSearchKeywordType(): ?string
    {
        return $this->searchKeywordType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSearchKeywordType $searchKeywordType
     * @return self
     */
    public function setSearchKeywordType(?string $searchKeywordType): self
    {
        $this->searchKeywordType = $searchKeywordType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10FilteringSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createEndDate !== null) {
            $result['create_end_date'] = $this->createEndDate;
        }
        if ($this->createStartDate !== null) {
            $result['create_start_date'] = $this->createStartDate;
        }
        if ($this->havingCost !== null) {
            $result['having_cost'] = $this->havingCost;
        }
        if ($this->modifyEndDate !== null) {
            $result['modify_end_date'] = $this->modifyEndDate;
        }
        if ($this->modifyStartDate !== null) {
            $result['modify_start_date'] = $this->modifyStartDate;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        if ($this->searchKeywordType !== null) {
            $result['search_keyword_type'] = $this->searchKeywordType;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_end_date'] ?? null) !== null) {
            $obj->createEndDate = (string) $v;
        }
        if (($v = $data['create_start_date'] ?? null) !== null) {
            $obj->createStartDate = (string) $v;
        }
        if (($v = $data['having_cost'] ?? null) !== null) {
            $obj->havingCost = (string) $v;
        }
        if (($v = $data['modify_end_date'] ?? null) !== null) {
            $obj->modifyEndDate = (string) $v;
        }
        if (($v = $data['modify_start_date'] ?? null) !== null) {
            $obj->modifyStartDate = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null) {
            $obj->searchKeyword = (string) $v;
        }
        if (($v = $data['search_keyword_type'] ?? null) !== null) {
            $obj->searchKeywordType = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
