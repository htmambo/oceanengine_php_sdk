<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInner implements \JsonSerializable
{
    /**
     * 账户间转账编号
     * @var string
     */
    protected ?string $accountTransferSerial = null;

    /**
     * 转账资金明细
     * @var \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInnerBalanceTransferDetailsListInner[]
     */
    protected ?array $balanceTransferDetailsList = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus
     */
    protected ?string $payStatus = null;

    /**
     * 加款方账户ID
     * @var int
     */
    protected ?int $payeeAccountId = null;

    /**
     * 加款方账户名
     * @var string
     */
    protected ?string $payeeAccountName = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType
     */
    protected ?string $payeeAccountType = null;

    /**
     * 减款方账户ID
     * @var int
     */
    protected ?int $payerAccountId = null;

    /**
     * 减款方账户名
     * @var string
     */
    protected ?string $payerAccountName = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType
     */
    protected ?string $payerAccountType = null;

    /**
     * 转账完成时间
     * @var string
     */
    protected ?string $transferFinishTime = null;

    /**
     * 转账成功金额 (单位:分)
     * @var int
     */
    protected ?int $transferSuccessAmount = null;

    /**
     * 账户间转账编号
     * @return string
     */
    public function getAccountTransferSerial(): ?string
    {
        return $this->accountTransferSerial;
    }

    /**
     * 账户间转账编号
     * @param string $accountTransferSerial
     * @return self
     */
    public function setAccountTransferSerial(?string $accountTransferSerial): self
    {
        $this->accountTransferSerial = $accountTransferSerial;
        return $this;
    }

    /**
     * 转账资金明细
     * @return \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInnerBalanceTransferDetailsListInner[]
     */
    public function getBalanceTransferDetailsList(): ?array
    {
        return $this->balanceTransferDetailsList;
    }

    /**
     * 转账资金明细
     * @param \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInnerBalanceTransferDetailsListInner[] $balanceTransferDetailsList
     * @return self
     */
    public function setBalanceTransferDetailsList(?array $balanceTransferDetailsList): self
    {
        $this->balanceTransferDetailsList = $balanceTransferDetailsList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus
     */
    public function getPayStatus(): ?string
    {
        return $this->payStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayStatus $payStatus
     * @return self
     */
    public function setPayStatus(?string $payStatus): self
    {
        $this->payStatus = $payStatus;
        return $this;
    }

    /**
     * 加款方账户ID
     * @return int
     */
    public function getPayeeAccountId(): ?int
    {
        return $this->payeeAccountId;
    }

    /**
     * 加款方账户ID
     * @param int $payeeAccountId
     * @return self
     */
    public function setPayeeAccountId(?int $payeeAccountId): self
    {
        $this->payeeAccountId = $payeeAccountId;
        return $this;
    }

    /**
     * 加款方账户名
     * @return string
     */
    public function getPayeeAccountName(): ?string
    {
        return $this->payeeAccountName;
    }

    /**
     * 加款方账户名
     * @param string $payeeAccountName
     * @return self
     */
    public function setPayeeAccountName(?string $payeeAccountName): self
    {
        $this->payeeAccountName = $payeeAccountName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType
     */
    public function getPayeeAccountType(): ?string
    {
        return $this->payeeAccountType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayeeAccountType $payeeAccountType
     * @return self
     */
    public function setPayeeAccountType(?string $payeeAccountType): self
    {
        $this->payeeAccountType = $payeeAccountType;
        return $this;
    }

    /**
     * 减款方账户ID
     * @return int
     */
    public function getPayerAccountId(): ?int
    {
        return $this->payerAccountId;
    }

    /**
     * 减款方账户ID
     * @param int $payerAccountId
     * @return self
     */
    public function setPayerAccountId(?int $payerAccountId): self
    {
        $this->payerAccountId = $payerAccountId;
        return $this;
    }

    /**
     * 减款方账户名
     * @return string
     */
    public function getPayerAccountName(): ?string
    {
        return $this->payerAccountName;
    }

    /**
     * 减款方账户名
     * @param string $payerAccountName
     * @return self
     */
    public function setPayerAccountName(?string $payerAccountName): self
    {
        $this->payerAccountName = $payerAccountName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType
     */
    public function getPayerAccountType(): ?string
    {
        return $this->payerAccountType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30DataAccountTransferOrderResultListPayerAccountType $payerAccountType
     * @return self
     */
    public function setPayerAccountType(?string $payerAccountType): self
    {
        $this->payerAccountType = $payerAccountType;
        return $this;
    }

    /**
     * 转账完成时间
     * @return string
     */
    public function getTransferFinishTime(): ?string
    {
        return $this->transferFinishTime;
    }

    /**
     * 转账完成时间
     * @param string $transferFinishTime
     * @return self
     */
    public function setTransferFinishTime(?string $transferFinishTime): self
    {
        $this->transferFinishTime = $transferFinishTime;
        return $this;
    }

    /**
     * 转账成功金额 (单位:分)
     * @return int
     */
    public function getTransferSuccessAmount(): ?int
    {
        return $this->transferSuccessAmount;
    }

    /**
     * 转账成功金额 (单位:分)
     * @param int $transferSuccessAmount
     * @return self
     */
    public function setTransferSuccessAmount(?int $transferSuccessAmount): self
    {
        $this->transferSuccessAmount = $transferSuccessAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountTransferSerial !== null) {
            $result['account_transfer_serial'] = $this->accountTransferSerial;
        }
        if ($this->balanceTransferDetailsList !== null) {
            $result['balance_transfer_details_list'] = $this->balanceTransferDetailsList;
        }
        if ($this->payStatus !== null) {
            $result['pay_status'] = $this->payStatus;
        }
        if ($this->payeeAccountId !== null) {
            $result['payee_account_id'] = $this->payeeAccountId;
        }
        if ($this->payeeAccountName !== null) {
            $result['payee_account_name'] = $this->payeeAccountName;
        }
        if ($this->payeeAccountType !== null) {
            $result['payee_account_type'] = $this->payeeAccountType;
        }
        if ($this->payerAccountId !== null) {
            $result['payer_account_id'] = $this->payerAccountId;
        }
        if ($this->payerAccountName !== null) {
            $result['payer_account_name'] = $this->payerAccountName;
        }
        if ($this->payerAccountType !== null) {
            $result['payer_account_type'] = $this->payerAccountType;
        }
        if ($this->transferFinishTime !== null) {
            $result['transfer_finish_time'] = $this->transferFinishTime;
        }
        if ($this->transferSuccessAmount !== null) {
            $result['transfer_success_amount'] = $this->transferSuccessAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_transfer_serial'] ?? null) !== null) {
            $obj->accountTransferSerial = (string) $v;
        }
        if (($v = $data['balance_transfer_details_list'] ?? null) !== null && is_array($v)) {
            $obj->balanceTransferDetailsList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV2WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInnerBalanceTransferDetailsListInner::fromArray($vv), $v);
        }
        if (($v = $data['pay_status'] ?? null) !== null) {
            $obj->payStatus = (string) $v;
        }
        if (($v = $data['payee_account_id'] ?? null) !== null) {
            $obj->payeeAccountId = (int) $v;
        }
        if (($v = $data['payee_account_name'] ?? null) !== null) {
            $obj->payeeAccountName = (string) $v;
        }
        if (($v = $data['payee_account_type'] ?? null) !== null) {
            $obj->payeeAccountType = (string) $v;
        }
        if (($v = $data['payer_account_id'] ?? null) !== null) {
            $obj->payerAccountId = (int) $v;
        }
        if (($v = $data['payer_account_name'] ?? null) !== null) {
            $obj->payerAccountName = (string) $v;
        }
        if (($v = $data['payer_account_type'] ?? null) !== null) {
            $obj->payerAccountType = (string) $v;
        }
        if (($v = $data['transfer_finish_time'] ?? null) !== null) {
            $obj->transferFinishTime = (string) $v;
        }
        if (($v = $data['transfer_success_amount'] ?? null) !== null) {
            $obj->transferSuccessAmount = (int) $v;
        }
        return $obj;
    }
}
