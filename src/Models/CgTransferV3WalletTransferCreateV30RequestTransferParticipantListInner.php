<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee
     */
    protected ?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee $payee = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer
     */
    protected ?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer $payer = null;

    /**
     * 转账参与方资金列表
     * @var \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[]
     */
    protected ?array $transferCapitalList = null;

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee
     */
    public function getPayee(): ?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee
    {
        return $this->payee;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee $payee
     * @return self
     */
    public function setPayee(?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer
     */
    public function getPayer(): ?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer
    {
        return $this->payer;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer $payer
     * @return self
     */
    public function setPayer(?\Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer $payer): self
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * 转账参与方资金列表
     * @return \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[]
     */
    public function getTransferCapitalList(): ?array
    {
        return $this->transferCapitalList;
    }

    /**
     * 转账参与方资金列表
     * @param \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[] $transferCapitalList
     * @return self
     */
    public function setTransferCapitalList(?array $transferCapitalList): self
    {
        $this->transferCapitalList = $transferCapitalList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->payee !== null) {
            $result['payee'] = $this->payee;
        }
        if ($this->payer !== null) {
            $result['payer'] = $this->payer;
        }
        if ($this->transferCapitalList !== null) {
            $result['transfer_capital_list'] = $this->transferCapitalList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payee'] ?? null) !== null && is_array($v)) {
            $obj->payee = \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayee::fromArray($v);
        }
        if (($v = $data['payer'] ?? null) !== null && is_array($v)) {
            $obj->payer = \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerPayer::fromArray($v);
        }
        if (($v = $data['transfer_capital_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV3WalletTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
