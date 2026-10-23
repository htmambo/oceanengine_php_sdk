<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail implements \JsonSerializable
{
    /**
     * 失败原因
     * @var int
     */
    protected ?int $failCode = null;

    /**
     * 失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 账号是否停投
     * @var bool
     */
    protected ?bool $hasSuspend = null;

    /**
     * 失败原因
     * @return int
     */
    public function getFailCode(): ?int
    {
        return $this->failCode;
    }

    /**
     * 失败原因
     * @param int $failCode
     * @return self
     */
    public function setFailCode(?int $failCode): self
    {
        $this->failCode = $failCode;
        return $this;
    }

    /**
     * 失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 账号是否停投
     * @return bool
     */
    public function getHasSuspend(): ?bool
    {
        return $this->hasSuspend;
    }

    /**
     * 账号是否停投
     * @param bool $hasSuspend
     * @return self
     */
    public function setHasSuspend(?bool $hasSuspend): self
    {
        $this->hasSuspend = $hasSuspend;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failCode !== null) {
            $result['fail_code'] = $this->failCode;
        }
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->hasSuspend !== null) {
            $result['has_suspend'] = $this->hasSuspend;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_code'] ?? null) !== null) {
            $obj->failCode = (int) $v;
        }
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['has_suspend'] ?? null) !== null) {
            $obj->hasSuspend = (bool) $v;
        }
        return $obj;
    }
}
