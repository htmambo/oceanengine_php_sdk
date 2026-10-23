<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
     */
    protected ?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
     */
    protected ?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer = null;

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
     */
    public function getPayee(): ?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee
    {
        return $this->payee;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee
     * @return self
     */
    public function setPayee(?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
     */
    public function getPayer(): ?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer
    {
        return $this->payer;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer
     * @return self
     */
    public function setPayer(?\Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer $payer): self
    {
        $this->payer = $payer;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payee'] ?? null) !== null && is_array($v)) {
            $obj->payee = \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayee::fromArray($v);
        }
        if (($v = $data['payer'] ?? null) !== null && is_array($v)) {
            $obj->payer = \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInnerPayer::fromArray($v);
        }
        return $obj;
    }
}
