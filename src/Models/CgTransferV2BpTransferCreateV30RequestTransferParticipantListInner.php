<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2BpTransferCreateV30RequestTransferParticipantListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee
     */
    protected ?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee $payee = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer
     */
    protected ?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer $payer = null;

    /**
     * 转账参与方资金列表
     * @var \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[]
     */
    protected ?array $transferCapitalList = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2BpTransferCreateV30TransferParticipantListTransferType
     */
    protected ?string $transferType = null;

    /**
     * @return \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee
     */
    public function getPayee(): ?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee
    {
        return $this->payee;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee $payee
     * @return self
     */
    public function setPayee(?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer
     */
    public function getPayer(): ?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer
    {
        return $this->payer;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer $payer
     * @return self
     */
    public function setPayer(?\Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer $payer): self
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * 转账参与方资金列表
     * @return \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[]
     */
    public function getTransferCapitalList(): ?array
    {
        return $this->transferCapitalList;
    }

    /**
     * 转账参与方资金列表
     * @param \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner[] $transferCapitalList
     * @return self
     */
    public function setTransferCapitalList(?array $transferCapitalList): self
    {
        $this->transferCapitalList = $transferCapitalList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2BpTransferCreateV30TransferParticipantListTransferType
     */
    public function getTransferType(): ?string
    {
        return $this->transferType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpTransferCreateV30TransferParticipantListTransferType $transferType
     * @return self
     */
    public function setTransferType(?string $transferType): self
    {
        $this->transferType = $transferType;
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
        if ($this->transferType !== null) {
            $result['transfer_type'] = $this->transferType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payee'] ?? null) !== null && is_array($v)) {
            $obj->payee = \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayee::fromArray($v);
        }
        if (($v = $data['payer'] ?? null) !== null && is_array($v)) {
            $obj->payer = \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerPayer::fromArray($v);
        }
        if (($v = $data['transfer_capital_list'] ?? null) !== null && is_array($v)) {
            $obj->transferCapitalList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV2BpTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner::fromArray($vv), $v);
        }
        if (($v = $data['transfer_type'] ?? null) !== null) {
            $obj->transferType = (string) $v;
        }
        return $obj;
    }
}
