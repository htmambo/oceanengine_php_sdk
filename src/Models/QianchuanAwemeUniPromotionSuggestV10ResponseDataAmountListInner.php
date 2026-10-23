<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionSuggestV10ResponseDataAmountListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $amount = null;

    /**
     * 预估最大净成交金额
     * @var int
     */
    protected ?int $maxTotalOrderSettleAmountForRoi21h = null;

    /**
     * 预估最大整体成交金额
     * @var int
     */
    protected ?int $maxTotalPayOrderGmv = null;

    /**
     * 预估最大整体支付roi
     * @var float
     */
    protected ?float $maxTotalPrepayAndPayOrderRoi = null;

    /**
     * 预估最大净支付roi
     * @var float
     */
    protected ?float $maxTotalPrepayAndPaySettleRoi21h = null;

    /**
     * 预估最小净成交金额
     * @var int
     */
    protected ?int $minTotalOrderSettleAmountForRoi21h = null;

    /**
     * 预估最小整体成交金额
     * @var int
     */
    protected ?int $minTotalPayOrderGmv = null;

    /**
     * 预估最小整体支付roi
     * @var float
     */
    protected ?float $minTotalPrepayAndPayOrderRoi = null;

    /**
     * 预估最小净支付roi
     * @var float
     */
    protected ?float $minTotalPrepayAndPaySettleRoi21h = null;

    /**
     * @var string
     */
    protected ?string $tag = null;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 预估最大净成交金额
     * @return int
     */
    public function getMaxTotalOrderSettleAmountForRoi21h(): ?int
    {
        return $this->maxTotalOrderSettleAmountForRoi21h;
    }

    /**
     * 预估最大净成交金额
     * @param int $maxTotalOrderSettleAmountForRoi21h
     * @return self
     */
    public function setMaxTotalOrderSettleAmountForRoi21h(?int $maxTotalOrderSettleAmountForRoi21h): self
    {
        $this->maxTotalOrderSettleAmountForRoi21h = $maxTotalOrderSettleAmountForRoi21h;
        return $this;
    }

    /**
     * 预估最大整体成交金额
     * @return int
     */
    public function getMaxTotalPayOrderGmv(): ?int
    {
        return $this->maxTotalPayOrderGmv;
    }

    /**
     * 预估最大整体成交金额
     * @param int $maxTotalPayOrderGmv
     * @return self
     */
    public function setMaxTotalPayOrderGmv(?int $maxTotalPayOrderGmv): self
    {
        $this->maxTotalPayOrderGmv = $maxTotalPayOrderGmv;
        return $this;
    }

    /**
     * 预估最大整体支付roi
     * @return float
     */
    public function getMaxTotalPrepayAndPayOrderRoi(): ?float
    {
        return $this->maxTotalPrepayAndPayOrderRoi;
    }

    /**
     * 预估最大整体支付roi
     * @param float $maxTotalPrepayAndPayOrderRoi
     * @return self
     */
    public function setMaxTotalPrepayAndPayOrderRoi(?float $maxTotalPrepayAndPayOrderRoi): self
    {
        $this->maxTotalPrepayAndPayOrderRoi = $maxTotalPrepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 预估最大净支付roi
     * @return float
     */
    public function getMaxTotalPrepayAndPaySettleRoi21h(): ?float
    {
        return $this->maxTotalPrepayAndPaySettleRoi21h;
    }

    /**
     * 预估最大净支付roi
     * @param float $maxTotalPrepayAndPaySettleRoi21h
     * @return self
     */
    public function setMaxTotalPrepayAndPaySettleRoi21h(?float $maxTotalPrepayAndPaySettleRoi21h): self
    {
        $this->maxTotalPrepayAndPaySettleRoi21h = $maxTotalPrepayAndPaySettleRoi21h;
        return $this;
    }

    /**
     * 预估最小净成交金额
     * @return int
     */
    public function getMinTotalOrderSettleAmountForRoi21h(): ?int
    {
        return $this->minTotalOrderSettleAmountForRoi21h;
    }

    /**
     * 预估最小净成交金额
     * @param int $minTotalOrderSettleAmountForRoi21h
     * @return self
     */
    public function setMinTotalOrderSettleAmountForRoi21h(?int $minTotalOrderSettleAmountForRoi21h): self
    {
        $this->minTotalOrderSettleAmountForRoi21h = $minTotalOrderSettleAmountForRoi21h;
        return $this;
    }

    /**
     * 预估最小整体成交金额
     * @return int
     */
    public function getMinTotalPayOrderGmv(): ?int
    {
        return $this->minTotalPayOrderGmv;
    }

    /**
     * 预估最小整体成交金额
     * @param int $minTotalPayOrderGmv
     * @return self
     */
    public function setMinTotalPayOrderGmv(?int $minTotalPayOrderGmv): self
    {
        $this->minTotalPayOrderGmv = $minTotalPayOrderGmv;
        return $this;
    }

    /**
     * 预估最小整体支付roi
     * @return float
     */
    public function getMinTotalPrepayAndPayOrderRoi(): ?float
    {
        return $this->minTotalPrepayAndPayOrderRoi;
    }

    /**
     * 预估最小整体支付roi
     * @param float $minTotalPrepayAndPayOrderRoi
     * @return self
     */
    public function setMinTotalPrepayAndPayOrderRoi(?float $minTotalPrepayAndPayOrderRoi): self
    {
        $this->minTotalPrepayAndPayOrderRoi = $minTotalPrepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 预估最小净支付roi
     * @return float
     */
    public function getMinTotalPrepayAndPaySettleRoi21h(): ?float
    {
        return $this->minTotalPrepayAndPaySettleRoi21h;
    }

    /**
     * 预估最小净支付roi
     * @param float $minTotalPrepayAndPaySettleRoi21h
     * @return self
     */
    public function setMinTotalPrepayAndPaySettleRoi21h(?float $minTotalPrepayAndPaySettleRoi21h): self
    {
        $this->minTotalPrepayAndPaySettleRoi21h = $minTotalPrepayAndPaySettleRoi21h;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->maxTotalOrderSettleAmountForRoi21h !== null) {
            $result['max_total_order_settle_amount_for_roi2_1h'] = $this->maxTotalOrderSettleAmountForRoi21h;
        }
        if ($this->maxTotalPayOrderGmv !== null) {
            $result['max_total_pay_order_gmv'] = $this->maxTotalPayOrderGmv;
        }
        if ($this->maxTotalPrepayAndPayOrderRoi !== null) {
            $result['max_total_prepay_and_pay_order_roi'] = $this->maxTotalPrepayAndPayOrderRoi;
        }
        if ($this->maxTotalPrepayAndPaySettleRoi21h !== null) {
            $result['max_total_prepay_and_pay_settle_roi2_1h'] = $this->maxTotalPrepayAndPaySettleRoi21h;
        }
        if ($this->minTotalOrderSettleAmountForRoi21h !== null) {
            $result['min_total_order_settle_amount_for_roi2_1h'] = $this->minTotalOrderSettleAmountForRoi21h;
        }
        if ($this->minTotalPayOrderGmv !== null) {
            $result['min_total_pay_order_gmv'] = $this->minTotalPayOrderGmv;
        }
        if ($this->minTotalPrepayAndPayOrderRoi !== null) {
            $result['min_total_prepay_and_pay_order_roi'] = $this->minTotalPrepayAndPayOrderRoi;
        }
        if ($this->minTotalPrepayAndPaySettleRoi21h !== null) {
            $result['min_total_prepay_and_pay_settle_roi2_1h'] = $this->minTotalPrepayAndPaySettleRoi21h;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['max_total_order_settle_amount_for_roi2_1h'] ?? null) !== null) {
            $obj->maxTotalOrderSettleAmountForRoi21h = (int) $v;
        }
        if (($v = $data['max_total_pay_order_gmv'] ?? null) !== null) {
            $obj->maxTotalPayOrderGmv = (int) $v;
        }
        if (($v = $data['max_total_prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->maxTotalPrepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['max_total_prepay_and_pay_settle_roi2_1h'] ?? null) !== null) {
            $obj->maxTotalPrepayAndPaySettleRoi21h = (float) $v;
        }
        if (($v = $data['min_total_order_settle_amount_for_roi2_1h'] ?? null) !== null) {
            $obj->minTotalOrderSettleAmountForRoi21h = (int) $v;
        }
        if (($v = $data['min_total_pay_order_gmv'] ?? null) !== null) {
            $obj->minTotalPayOrderGmv = (int) $v;
        }
        if (($v = $data['min_total_prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->minTotalPrepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['min_total_prepay_and_pay_settle_roi2_1h'] ?? null) !== null) {
            $obj->minTotalPrepayAndPaySettleRoi21h = (float) $v;
        }
        if (($v = $data['tag'] ?? null) !== null) {
            $obj->tag = (string) $v;
        }
        return $obj;
    }
}
