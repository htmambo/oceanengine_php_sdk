<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCreateV30Request implements \JsonSerializable
{
    /**
     * 鉴权账户
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @var string
     */
    protected ?string $bizRequestNo = null;

    /**
     * 申请转账的大钱包id
     * @var int
     */
    protected ?int $mainWalletId = null;

    /**
     * 转账备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 申请转账的小钱包列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInner[]
     */
    protected ?array $targetWalletDetailList = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30TransferDirection
     */
    protected ?string $transferDirection = null;

    /**
     * 鉴权账户
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 鉴权账户
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @return string
     */
    public function getBizRequestNo(): ?string
    {
        return $this->bizRequestNo;
    }

    /**
     * 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     * @param string $bizRequestNo
     * @return self
     */
    public function setBizRequestNo(?string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 申请转账的大钱包id
     * @return int
     */
    public function getMainWalletId(): ?int
    {
        return $this->mainWalletId;
    }

    /**
     * 申请转账的大钱包id
     * @param int $mainWalletId
     * @return self
     */
    public function setMainWalletId(?int $mainWalletId): self
    {
        $this->mainWalletId = $mainWalletId;
        return $this;
    }

    /**
     * 转账备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 转账备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 申请转账的小钱包列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInner[]
     */
    public function getTargetWalletDetailList(): ?array
    {
        return $this->targetWalletDetailList;
    }

    /**
     * 申请转账的小钱包列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInner[] $targetWalletDetailList
     * @return self
     */
    public function setTargetWalletDetailList(?array $targetWalletDetailList): self
    {
        $this->targetWalletDetailList = $targetWalletDetailList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30TransferDirection
     */
    public function getTransferDirection(): ?string
    {
        return $this->transferDirection;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30TransferDirection $transferDirection
     * @return self
     */
    public function setTransferDirection(?string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->bizRequestNo !== null) {
            $result['biz_request_no'] = $this->bizRequestNo;
        }
        if ($this->mainWalletId !== null) {
            $result['main_wallet_id'] = $this->mainWalletId;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->targetWalletDetailList !== null) {
            $result['target_wallet_detail_list'] = $this->targetWalletDetailList;
        }
        if ($this->transferDirection !== null) {
            $result['transfer_direction'] = $this->transferDirection;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['biz_request_no'] ?? null) !== null) {
            $obj->bizRequestNo = (string) $v;
        }
        if (($v = $data['main_wallet_id'] ?? null) !== null) {
            $obj->mainWalletId = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['target_wallet_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->targetWalletDetailList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_direction'] ?? null) !== null) {
            $obj->transferDirection = (string) $v;
        }
        return $obj;
    }
}
