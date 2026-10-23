<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
     */
    protected ?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
     */
    protected ?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType
     */
    protected ?string $transferType = null;

    /**
     * @return \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
     */
    public function getPayee(): ?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
    {
        return $this->payee;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee
     * @return self
     */
    public function setPayee(?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
     */
    public function getPayer(): ?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
    {
        return $this->payer;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer
     * @return self
     */
    public function setPayer(?\Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer): self
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType
     */
    public function getTransferType(): ?string
    {
        return $this->transferType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType $transferType
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
        if ($this->transferType !== null) {
            $result['transfer_type'] = $this->transferType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payee'] ?? null) !== null && is_array($v)) {
            $obj->payee = \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee::fromArray($v);
        }
        if (($v = $data['payer'] ?? null) !== null && is_array($v)) {
            $obj->payer = \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer::fromArray($v);
        }
        if (($v = $data['transfer_type'] ?? null) !== null) {
            $obj->transferType = (string) $v;
        }
        return $obj;
    }
}
