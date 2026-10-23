<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner implements \JsonSerializable
{
    /**
     * 赔付金额
     * @var float
     */
    protected ?float $compensateAmount = null;

    /**
     * @var \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
     */
    protected ?string $compensateStatus = null;

    /**
     * 成本保障结束原因
     * @var array<string,string>
     */
    protected ?array $endReasons = null;

    /**
     * 成本保障失效原因
     * @var array<string,string>
     */
    protected ?array $invalidReasons = null;

    /**
     * 请求计划id
     * @var int
     */
    protected ?int $queryId = null;

    /**
     * @var \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus
     */
    protected ?string $status = null;

    /**
     * 赔付规则链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * 赔付金额
     * @return float
     */
    public function getCompensateAmount(): ?float
    {
        return $this->compensateAmount;
    }

    /**
     * 赔付金额
     * @param float $compensateAmount
     * @return self
     */
    public function setCompensateAmount(?float $compensateAmount): self
    {
        $this->compensateAmount = $compensateAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
     */
    public function getCompensateStatus(): ?string
    {
        return $this->compensateStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus $compensateStatus
     * @return self
     */
    public function setCompensateStatus(?string $compensateStatus): self
    {
        $this->compensateStatus = $compensateStatus;
        return $this;
    }

    /**
     * 成本保障结束原因
     * @return array<string,string>
     */
    public function getEndReasons(): ?array
    {
        return $this->endReasons;
    }

    /**
     * 成本保障结束原因
     * @param array<string,string> $endReasons
     * @return self
     */
    public function setEndReasons(?array $endReasons): self
    {
        $this->endReasons = $endReasons;
        return $this;
    }

    /**
     * 成本保障失效原因
     * @return array<string,string>
     */
    public function getInvalidReasons(): ?array
    {
        return $this->invalidReasons;
    }

    /**
     * 成本保障失效原因
     * @param array<string,string> $invalidReasons
     * @return self
     */
    public function setInvalidReasons(?array $invalidReasons): self
    {
        $this->invalidReasons = $invalidReasons;
        return $this;
    }

    /**
     * 请求计划id
     * @return int
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }

    /**
     * 请求计划id
     * @param int $queryId
     * @return self
     */
    public function setQueryId(?int $queryId): self
    {
        $this->queryId = $queryId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 赔付规则链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 赔付规则链接
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateAmount !== null) {
            $result['compensate_amount'] = $this->compensateAmount;
        }
        if ($this->compensateStatus !== null) {
            $result['compensate_status'] = $this->compensateStatus;
        }
        if ($this->endReasons !== null) {
            $result['end_reasons'] = $this->endReasons;
        }
        if ($this->invalidReasons !== null) {
            $result['invalid_reasons'] = $this->invalidReasons;
        }
        if ($this->queryId !== null) {
            $result['query_id'] = $this->queryId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_amount'] ?? null) !== null) {
            $obj->compensateAmount = (float) $v;
        }
        if (($v = $data['compensate_status'] ?? null) !== null) {
            $obj->compensateStatus = (string) $v;
        }
        if (($v = $data['end_reasons'] ?? null) !== null && is_array($v)) {
            $obj->endReasons = $v;
        }
        if (($v = $data['invalid_reasons'] ?? null) !== null && is_array($v)) {
            $obj->invalidReasons = $v;
        }
        if (($v = $data['query_id'] ?? null) !== null) {
            $obj->queryId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
