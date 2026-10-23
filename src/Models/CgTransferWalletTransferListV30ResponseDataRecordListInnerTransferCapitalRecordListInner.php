<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInner implements \JsonSerializable
{
    /**
     * 转账资金子类型明细列表
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[]
     */
    protected ?array $capitalSubDetailList = null;

    /**
     * 转账资金创建时间yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 转账资金完成时间yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $finishTime = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform
     */
    protected ?string $platform = null;

    /**
     * 转账金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital
     */
    protected ?string $transferCapital = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 转账资金子类型明细列表
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[]
     */
    public function getCapitalSubDetailList(): ?array
    {
        return $this->capitalSubDetailList;
    }

    /**
     * 转账资金子类型明细列表
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner[] $capitalSubDetailList
     * @return self
     */
    public function setCapitalSubDetailList(?array $capitalSubDetailList): self
    {
        $this->capitalSubDetailList = $capitalSubDetailList;
        return $this;
    }

    /**
     * 转账资金创建时间yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 转账资金创建时间yyyy-MM-dd HH:mm:ss
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 转账资金完成时间yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getFinishTime(): ?string
    {
        return $this->finishTime;
    }

    /**
     * 转账资金完成时间yyyy-MM-dd HH:mm:ss
     * @param string $finishTime
     * @return self
     */
    public function setFinishTime(?string $finishTime): self
    {
        $this->finishTime = $finishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 转账金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账金额(单位：分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital
     */
    public function getTransferCapital(): ?string
    {
        return $this->transferCapital;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferCapital $transferCapital
     * @return self
     */
    public function setTransferCapital(?string $transferCapital): self
    {
        $this->transferCapital = $transferCapital;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferListV30DataRecordListTransferCapitalRecordListTransferStatus $transferStatus
     * @return self
     */
    public function setTransferStatus(?string $transferStatus): self
    {
        $this->transferStatus = $transferStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->capitalSubDetailList !== null) {
            $result['capital_sub_detail_list'] = $this->capitalSubDetailList;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->finishTime !== null) {
            $result['finish_time'] = $this->finishTime;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferCapital !== null) {
            $result['transfer_capital'] = $this->transferCapital;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_sub_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->capitalSubDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferListV30ResponseDataRecordListInnerTransferCapitalRecordListInnerCapitalSubDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['finish_time'] ?? null) !== null) {
            $obj->finishTime = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_capital'] ?? null) !== null) {
            $obj->transferCapital = (string) $v;
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        return $obj;
    }
}
