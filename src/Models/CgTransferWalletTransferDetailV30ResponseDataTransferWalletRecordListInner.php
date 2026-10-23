<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferDetailV30ResponseDataTransferWalletRecordListInner implements \JsonSerializable
{
    /**
     * 大钱包id
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * 小钱包id
     * @var int
     */
    protected ?int $subWalletId = null;

    /**
     * 转账金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * 转账资金类型列表
     * @var \Oceanengine\Models\CgTransferWalletTransferDetailV30ResponseDataTransferWalletRecordListInnerTransferCapitalRecordListInner[]
     */
    protected ?array $transferCapitalRecordList = null;

    /**
     * 钱包间转账编号
     * @var string
     */
    protected ?string $transferSerial = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferStatus
     */
    protected ?string $transferStatus = null;

    /**
     * 大钱包id
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 大钱包id
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * 小钱包id
     * @return int
     */
    public function getSubWalletId(): ?int
    {
        return $this->subWalletId;
    }

    /**
     * 小钱包id
     * @param int $subWalletId
     * @return self
     */
    public function setSubWalletId(?int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
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
     * 转账资金类型列表
     * @return \Oceanengine\Models\CgTransferWalletTransferDetailV30ResponseDataTransferWalletRecordListInnerTransferCapitalRecordListInner[]
     */
    public function getTransferCapitalRecordList(): ?array
    {
        return $this->transferCapitalRecordList;
    }

    /**
     * 转账资金类型列表
     * @param \Oceanengine\Models\CgTransferWalletTransferDetailV30ResponseDataTransferWalletRecordListInnerTransferCapitalRecordListInner[] $transferCapitalRecordList
     * @return self
     */
    public function setTransferCapitalRecordList(?array $transferCapitalRecordList): self
    {
        $this->transferCapitalRecordList = $transferCapitalRecordList;
        return $this;
    }

    /**
     * 钱包间转账编号
     * @return string
     */
    public function getTransferSerial(): ?string
    {
        return $this->transferSerial;
    }

    /**
     * 钱包间转账编号
     * @param string $transferSerial
     * @return self
     */
    public function setTransferSerial(?string $transferSerial): self
    {
        $this->transferSerial = $transferSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferStatus
     */
    public function getTransferStatus(): ?string
    {
        return $this->transferStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferDetailV30DataTransferWalletRecordListTransferStatus $transferStatus
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
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->subWalletId !== null) {
            $result['sub_wallet_id'] = $this->subWalletId;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferCapitalRecordList !== null) {
            $result['transfer_capital_record_list'] = $this->transferCapitalRecordList;
        }
        if ($this->transferSerial !== null) {
            $result['transfer_serial'] = $this->transferSerial;
        }
        if ($this->transferStatus !== null) {
            $result['transfer_status'] = $this->transferStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['sub_wallet_id'] ?? null) !== null) {
            $obj->subWalletId = (int) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_capital_record_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalRecordList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferDetailV30ResponseDataTransferWalletRecordListInnerTransferCapitalRecordListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_serial'] ?? null) !== null) {
            $obj->transferSerial = (string) $v;
        }
        if (($v = $data['transfer_status'] ?? null) !== null) {
            $obj->transferStatus = (string) $v;
        }
        return $obj;
    }
}
