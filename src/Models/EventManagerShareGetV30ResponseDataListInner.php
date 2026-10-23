<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerShareGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareGetV30DataListAllAccountType
     */
    protected ?string $allAccountType = null;

    /**
     * @var \Oceanengine\Models\EventManagerShareGetV30DataListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareGetV30DataListAllAccountType
     */
    public function getAllAccountType(): ?string
    {
        return $this->allAccountType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareGetV30DataListAllAccountType $allAccountType
     * @return self
     */
    public function setAllAccountType(?string $allAccountType): self
    {
        $this->allAccountType = $allAccountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerShareGetV30DataListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\EventManagerShareGetV30DataListShareMode $shareMode
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
        if ($this->shareMode !== null) {
            $result['share_mode'] = $this->shareMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_info'] ?? null) !== null && is_array($v)) {
            $obj->accountInfo = \Oceanengine\Models\EventManagerShareGetV30ResponseDataListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account_type'] ?? null) !== null) {
            $obj->allAccountType = (string) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
