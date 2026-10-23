<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletTransferCreateV30RequestTransferParticipantListInnerPayee implements \JsonSerializable
{
    /**
     * 加款方账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 加款方账户id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 加款方账户id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        return $obj;
    }
}
