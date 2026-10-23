<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ResponseData implements \JsonSerializable
{
    /**
     * 参与方可转金额列表
     * @var \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInner[]
     */
    protected ?array $participantCanTransferBalanceList = null;

    /**
     * 参与方可转金额列表
     * @return \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInner[]
     */
    public function getParticipantCanTransferBalanceList(): ?array
    {
        return $this->participantCanTransferBalanceList;
    }

    /**
     * 参与方可转金额列表
     * @param \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInner[] $participantCanTransferBalanceList
     * @return self
     */
    public function setParticipantCanTransferBalanceList(?array $participantCanTransferBalanceList): self
    {
        $this->participantCanTransferBalanceList = $participantCanTransferBalanceList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->participantCanTransferBalanceList !== null) {
            $result['participant_can_transfer_balance_list'] = $this->participantCanTransferBalanceList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['participant_can_transfer_balance_list'] ?? null) !== null && is_array($v)) {
            $obj->participantCanTransferBalanceList = array_map(fn ($vv) => \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
