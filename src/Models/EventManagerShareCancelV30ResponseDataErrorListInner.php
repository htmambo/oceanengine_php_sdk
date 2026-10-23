<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerShareCancelV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30DataErrorListAllAccountType
     */
    protected ?string $allAccountType = null;

    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareCancelV30DataErrorListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30DataErrorListAllAccountType
     */
    public function getAllAccountType(): ?string
    {
        return $this->allAccountType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30DataErrorListAllAccountType $allAccountType
     * @return self
     */
    public function setAllAccountType(?string $allAccountType): self
    {
        $this->allAccountType = $allAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareCancelV30DataErrorListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareCancelV30DataErrorListShareMode $shareMode
     * @return self
     */
    public function setShareMode(?string $shareMode): self
    {
        $this->shareMode = $shareMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountInfo !== null) {
            $result['account_info'] = $this->accountInfo;
        }
        if ($this->allAccountType !== null) {
            $result['all_account_type'] = $this->allAccountType;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        if ($this->shareMode !== null) {
            $result['share_mode'] = $this->shareMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_info'] ?? null) !== null && is_array($v)) {
            $obj->accountInfo = \Oceanengine\Models\EventManagerShareCancelV30ResponseDataErrorListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account_type'] ?? null) !== null) {
            $obj->allAccountType = (string) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
