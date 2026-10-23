<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAccountCreateV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 账户ID，只有开户成功时有
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 账户名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 0:成功，其它失败
     * @var int
     */
    protected ?int $code = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $message = null;

    /**
     * 账户ID，只有开户成功时有
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID，只有开户成功时有
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 账户名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 0:成功，其它失败
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * 0:成功，其它失败
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 失败原因
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
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
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        return $obj;
    }
}
