<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInner implements \JsonSerializable
{
    /**
     * 账户间可转金额列表
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerCanTransferBalanceListInner[]
     */
    protected ?array $canTransferBalanceList = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee
     */
    protected ?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee $payee = null;

    /**
     * 加款方保证金总金额，单位分
     * @var int
     */
    protected ?int $payeeDepositAmount = null;

    /**
     * 加款方非品牌最小转入金额，单位分
     * @var int
     */
    protected ?int $payeeMinNoBrandTransferIn = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer
     */
    protected ?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer $payer = null;

    /**
     * 减款方余额列表
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayerBalancesInner[]
     */
    protected ?array $payerBalances = null;

    /**
     * 减款方保证金总金额，单位分
     * @var int
     */
    protected ?int $payerDepositAmount = null;

    /**
     * 减款方非品牌最大可转出金额，单位分
     * @var int
     */
    protected ?int $payerMaxNoBrandTransferOut = null;

    /**
     * 账户间可转金额列表
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerCanTransferBalanceListInner[]
     */
    public function getCanTransferBalanceList(): ?array
    {
        return $this->canTransferBalanceList;
    }

    /**
     * 账户间可转金额列表
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerCanTransferBalanceListInner[] $canTransferBalanceList
     * @return self
     */
    public function setCanTransferBalanceList(?array $canTransferBalanceList): self
    {
        $this->canTransferBalanceList = $canTransferBalanceList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee
     */
    public function getPayee(): ?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee
    {
        return $this->payee;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee $payee
     * @return self
     */
    public function setPayee(?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * 加款方保证金总金额，单位分
     * @return int
     */
    public function getPayeeDepositAmount(): ?int
    {
        return $this->payeeDepositAmount;
    }

    /**
     * 加款方保证金总金额，单位分
     * @param int $payeeDepositAmount
     * @return self
     */
    public function setPayeeDepositAmount(?int $payeeDepositAmount): self
    {
        $this->payeeDepositAmount = $payeeDepositAmount;
        return $this;
    }

    /**
     * 加款方非品牌最小转入金额，单位分
     * @return int
     */
    public function getPayeeMinNoBrandTransferIn(): ?int
    {
        return $this->payeeMinNoBrandTransferIn;
    }

    /**
     * 加款方非品牌最小转入金额，单位分
     * @param int $payeeMinNoBrandTransferIn
     * @return self
     */
    public function setPayeeMinNoBrandTransferIn(?int $payeeMinNoBrandTransferIn): self
    {
        $this->payeeMinNoBrandTransferIn = $payeeMinNoBrandTransferIn;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer
     */
    public function getPayer(): ?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer
    {
        return $this->payer;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer $payer
     * @return self
     */
    public function setPayer(?\Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer $payer): self
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * 减款方余额列表
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayerBalancesInner[]
     */
    public function getPayerBalances(): ?array
    {
        return $this->payerBalances;
    }

    /**
     * 减款方余额列表
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayerBalancesInner[] $payerBalances
     * @return self
     */
    public function setPayerBalances(?array $payerBalances): self
    {
        $this->payerBalances = $payerBalances;
        return $this;
    }

    /**
     * 减款方保证金总金额，单位分
     * @return int
     */
    public function getPayerDepositAmount(): ?int
    {
        return $this->payerDepositAmount;
    }

    /**
     * 减款方保证金总金额，单位分
     * @param int $payerDepositAmount
     * @return self
     */
    public function setPayerDepositAmount(?int $payerDepositAmount): self
    {
        $this->payerDepositAmount = $payerDepositAmount;
        return $this;
    }

    /**
     * 减款方非品牌最大可转出金额，单位分
     * @return int
     */
    public function getPayerMaxNoBrandTransferOut(): ?int
    {
        return $this->payerMaxNoBrandTransferOut;
    }

    /**
     * 减款方非品牌最大可转出金额，单位分
     * @param int $payerMaxNoBrandTransferOut
     * @return self
     */
    public function setPayerMaxNoBrandTransferOut(?int $payerMaxNoBrandTransferOut): self
    {
        $this->payerMaxNoBrandTransferOut = $payerMaxNoBrandTransferOut;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canTransferBalanceList !== null) {
            $result['can_transfer_balance_list'] = $this->canTransferBalanceList;
        }
        if ($this->payee !== null) {
            $result['payee'] = $this->payee;
        }
        if ($this->payeeDepositAmount !== null) {
            $result['payee_deposit_amount'] = $this->payeeDepositAmount;
        }
        if ($this->payeeMinNoBrandTransferIn !== null) {
            $result['payee_min_no_brand_transfer_in'] = $this->payeeMinNoBrandTransferIn;
        }
        if ($this->payer !== null) {
            $result['payer'] = $this->payer;
        }
        if ($this->payerBalances !== null) {
            $result['payer_balances'] = $this->payerBalances;
        }
        if ($this->payerDepositAmount !== null) {
            $result['payer_deposit_amount'] = $this->payerDepositAmount;
        }
        if ($this->payerMaxNoBrandTransferOut !== null) {
            $result['payer_max_no_brand_transfer_out'] = $this->payerMaxNoBrandTransferOut;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_transfer_balance_list'] ?? null) !== null && is_array($v)) {
            $obj->canTransferBalanceList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerCanTransferBalanceListInner::fromArray($vv), $v);
        }
        if (($v = $data['payee'] ?? null) !== null && is_array($v)) {
            $obj->payee = \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee::fromArray($v);
        }
        if (($v = $data['payee_deposit_amount'] ?? null) !== null) {
            $obj->payeeDepositAmount = (int) $v;
        }
        if (($v = $data['payee_min_no_brand_transfer_in'] ?? null) !== null) {
            $obj->payeeMinNoBrandTransferIn = (int) $v;
        }
        if (($v = $data['payer'] ?? null) !== null && is_array($v)) {
            $obj->payer = \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayer::fromArray($v);
        }
        if (($v = $data['payer_balances'] ?? null) !== null && is_array($v)) {
            $obj->payerBalances = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayerBalancesInner::fromArray($vv), $v);
        }
        if (($v = $data['payer_deposit_amount'] ?? null) !== null) {
            $obj->payerDepositAmount = (int) $v;
        }
        if (($v = $data['payer_max_no_brand_transfer_out'] ?? null) !== null) {
            $obj->payerMaxNoBrandTransferOut = (int) $v;
        }
        return $obj;
    }
}
