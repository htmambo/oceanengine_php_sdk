<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpSubjectListV30ResponseDataCompanyBasicInfosInnerAccountParam implements \JsonSerializable
{
    /**
     * 请求的账号id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 请求账号的类型
     * @var int
     */
    protected ?int $accountType = null;

    /**
     * 请求的账号id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 请求的账号id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 请求账号的类型
     * @return int
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * 请求账号的类型
     * @param int $accountType
     * @return self
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (int) $v;
        }
        return $obj;
    }
}
