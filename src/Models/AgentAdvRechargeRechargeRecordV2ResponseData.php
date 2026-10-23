<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvRechargeRechargeRecordV2ResponseData implements \JsonSerializable
{
    /**
     * 响应码
     * @var int
     */
    protected ?int $code = null;

    /**
     * 充值记录
     * @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * 响应信息
     * @var string
     */
    protected ?string $message = null;

    /**
     * @var \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 充值金额汇总（元）
     * @var float
     */
    protected ?float $totalAmount = null;

    /**
     * 响应码
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * 响应码
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * 充值记录
     * @return \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 充值记录
     * @param \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 响应信息
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 响应信息
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 充值金额汇总（元）
     * @return float
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * 充值金额汇总（元）
     * @param float $totalAmount
     * @return self
     */
    public function setTotalAmount(?float $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->totalAmount !== null) {
            $result['total_amount'] = $this->totalAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentAdvRechargeRechargeRecordV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['total_amount'] ?? null) !== null) {
            $obj->totalAmount = (float) $v;
        }
        return $obj;
    }
}
