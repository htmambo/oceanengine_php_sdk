<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeItemsDataV2ResponseDataDataListInnerItemInfoDailyListInner implements \JsonSerializable
{
    /**
     * 预估广告消耗金额
     * @var int
     */
    protected ?int $estAdCost = null;

    /**
     * 预估付费流水金额
     * @var int
     */
    protected ?int $estSales = null;

    /**
     * 数据格式'YYYYMMDD'，如：'20240305'
     * @var string
     */
    protected ?string $pDate = null;

    /**
     * 已发放达人广告分成金额
     * @var int
     */
    protected ?int $settleAdShare = null;

    /**
     * 已发放达人付费分佣金额
     * @var int
     */
    protected ?int $settleCps = null;

    /**
     * 预估广告消耗金额
     * @return int
     */
    public function getEstAdCost(): ?int
    {
        return $this->estAdCost;
    }

    /**
     * 预估广告消耗金额
     * @param int $estAdCost
     * @return self
     */
    public function setEstAdCost(?int $estAdCost): self
    {
        $this->estAdCost = $estAdCost;
        return $this;
    }

    /**
     * 预估付费流水金额
     * @return int
     */
    public function getEstSales(): ?int
    {
        return $this->estSales;
    }

    /**
     * 预估付费流水金额
     * @param int $estSales
     * @return self
     */
    public function setEstSales(?int $estSales): self
    {
        $this->estSales = $estSales;
        return $this;
    }

    /**
     * 数据格式'YYYYMMDD'，如：'20240305'
     * @return string
     */
    public function getPDate(): ?string
    {
        return $this->pDate;
    }

    /**
     * 数据格式'YYYYMMDD'，如：'20240305'
     * @param string $pDate
     * @return self
     */
    public function setPDate(?string $pDate): self
    {
        $this->pDate = $pDate;
        return $this;
    }

    /**
     * 已发放达人广告分成金额
     * @return int
     */
    public function getSettleAdShare(): ?int
    {
        return $this->settleAdShare;
    }

    /**
     * 已发放达人广告分成金额
     * @param int $settleAdShare
     * @return self
     */
    public function setSettleAdShare(?int $settleAdShare): self
    {
        $this->settleAdShare = $settleAdShare;
        return $this;
    }

    /**
     * 已发放达人付费分佣金额
     * @return int
     */
    public function getSettleCps(): ?int
    {
        return $this->settleCps;
    }

    /**
     * 已发放达人付费分佣金额
     * @param int $settleCps
     * @return self
     */
    public function setSettleCps(?int $settleCps): self
    {
        $this->settleCps = $settleCps;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->estAdCost !== null) {
            $result['est_ad_cost'] = $this->estAdCost;
        }
        if ($this->estSales !== null) {
            $result['est_sales'] = $this->estSales;
        }
        if ($this->pDate !== null) {
            $result['p_date'] = $this->pDate;
        }
        if ($this->settleAdShare !== null) {
            $result['settle_ad_share'] = $this->settleAdShare;
        }
        if ($this->settleCps !== null) {
            $result['settle_cps'] = $this->settleCps;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['est_ad_cost'] ?? null) !== null) {
            $obj->estAdCost = (int) $v;
        }
        if (($v = $data['est_sales'] ?? null) !== null) {
            $obj->estSales = (int) $v;
        }
        if (($v = $data['p_date'] ?? null) !== null) {
            $obj->pDate = (string) $v;
        }
        if (($v = $data['settle_ad_share'] ?? null) !== null) {
            $obj->settleAdShare = (int) $v;
        }
        if (($v = $data['settle_cps'] ?? null) !== null) {
            $obj->settleCps = (int) $v;
        }
        return $obj;
    }
}
