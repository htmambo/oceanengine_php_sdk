<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountDeleteV30ResponseDataFailedAccountsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var int
     */
    protected ?int $errCode = null;

    /**
     * @var string
     */
    protected ?string $errMsg = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrCode(): ?int
    {
        return $this->errCode;
    }

    /**
     * @param int $errCode
     * @return self
     */
    public function setErrCode(?int $errCode): self
    {
        $this->errCode = $errCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }

    /**
     * @param string $errMsg
     * @return self
     */
    public function setErrMsg(?string $errMsg): self
    {
        $this->errMsg = $errMsg;
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
        if ($this->errCode !== null) {
            $result['err_code'] = $this->errCode;
        }
        if ($this->errMsg !== null) {
            $result['err_msg'] = $this->errMsg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['err_code'] ?? null) !== null) {
            $obj->errCode = (int) $v;
        }
        if (($v = $data['err_msg'] ?? null) !== null) {
            $obj->errMsg = (string) $v;
        }
        return $obj;
    }
}
