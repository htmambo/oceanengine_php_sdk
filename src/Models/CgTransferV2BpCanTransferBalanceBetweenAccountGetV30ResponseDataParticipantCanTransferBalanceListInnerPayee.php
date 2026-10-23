<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayee implements \JsonSerializable
{
    /**
     * 加款方账户id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory
     */
    protected ?string $accountTypeCategory = null;

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
     * @return \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory
     */
    public function getAccountTypeCategory(): ?string
    {
        return $this->accountTypeCategory;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2BpCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayeeAccountTypeCategory $accountTypeCategory
     * @return self
     */
    public function setAccountTypeCategory(?string $accountTypeCategory): self
    {
        $this->accountTypeCategory = $accountTypeCategory;
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
        if ($this->accountTypeCategory !== null) {
            $result['account_type_category'] = $this->accountTypeCategory;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type_category'] ?? null) !== null) {
            $obj->accountTypeCategory = (string) $v;
        }
        return $obj;
    }
}
