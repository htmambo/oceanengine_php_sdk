<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundDetailGetV2ResponseDataRefundDetailListInner implements \JsonSerializable
{
    /**
     * 广告计划产生线索的日期，格式yyyyMMdd
     * @var string
     */
    protected ?string $adCreateClueDate = null;

    /**
     * 广告计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 查询账单月份，格式yyyyMM
     * @var string
     */
    protected ?string $month = null;

    /**
     * 参与返款的线索数
     * @var int
     */
    protected ?int $participateRefundClueCnt = null;

    /**
     * 支付赔付的线索数
     * @var int
     */
    protected ?int $payRefundClueCnt = null;

    /**
     * 赔付金额
     * @var float
     */
    protected ?float $refundPayMoney = null;

    /**
     * 广告计划产生线索的日期，格式yyyyMMdd
     * @return string
     */
    public function getAdCreateClueDate(): ?string
    {
        return $this->adCreateClueDate;
    }

    /**
     * 广告计划产生线索的日期，格式yyyyMMdd
     * @param string $adCreateClueDate
     * @return self
     */
    public function setAdCreateClueDate(?string $adCreateClueDate): self
    {
        $this->adCreateClueDate = $adCreateClueDate;
        return $this;
    }

    /**
     * 广告计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 查询账单月份，格式yyyyMM
     * @return string
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }

    /**
     * 查询账单月份，格式yyyyMM
     * @param string $month
     * @return self
     */
    public function setMonth(?string $month): self
    {
        $this->month = $month;
        return $this;
    }

    /**
     * 参与返款的线索数
     * @return int
     */
    public function getParticipateRefundClueCnt(): ?int
    {
        return $this->participateRefundClueCnt;
    }

    /**
     * 参与返款的线索数
     * @param int $participateRefundClueCnt
     * @return self
     */
    public function setParticipateRefundClueCnt(?int $participateRefundClueCnt): self
    {
        $this->participateRefundClueCnt = $participateRefundClueCnt;
        return $this;
    }

    /**
     * 支付赔付的线索数
     * @return int
     */
    public function getPayRefundClueCnt(): ?int
    {
        return $this->payRefundClueCnt;
    }

    /**
     * 支付赔付的线索数
     * @param int $payRefundClueCnt
     * @return self
     */
    public function setPayRefundClueCnt(?int $payRefundClueCnt): self
    {
        $this->payRefundClueCnt = $payRefundClueCnt;
        return $this;
    }

    /**
     * 赔付金额
     * @return float
     */
    public function getRefundPayMoney(): ?float
    {
        return $this->refundPayMoney;
    }

    /**
     * 赔付金额
     * @param float $refundPayMoney
     * @return self
     */
    public function setRefundPayMoney(?float $refundPayMoney): self
    {
        $this->refundPayMoney = $refundPayMoney;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCreateClueDate !== null) {
            $result['ad_create_clue_date'] = $this->adCreateClueDate;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->month !== null) {
            $result['month'] = $this->month;
        }
        if ($this->participateRefundClueCnt !== null) {
            $result['participate_refund_clue_cnt'] = $this->participateRefundClueCnt;
        }
        if ($this->payRefundClueCnt !== null) {
            $result['pay_refund_clue_cnt'] = $this->payRefundClueCnt;
        }
        if ($this->refundPayMoney !== null) {
            $result['refund_pay_money'] = $this->refundPayMoney;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_create_clue_date'] ?? null) !== null) {
            $obj->adCreateClueDate = (string) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['month'] ?? null) !== null) {
            $obj->month = (string) $v;
        }
        if (($v = $data['participate_refund_clue_cnt'] ?? null) !== null) {
            $obj->participateRefundClueCnt = (int) $v;
        }
        if (($v = $data['pay_refund_clue_cnt'] ?? null) !== null) {
            $obj->payRefundClueCnt = (int) $v;
        }
        if (($v = $data['refund_pay_money'] ?? null) !== null) {
            $obj->refundPayMoney = (float) $v;
        }
        return $obj;
    }
}
