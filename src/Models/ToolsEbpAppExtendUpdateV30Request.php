<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 部分更新模式下需要指定要更新的渠道号集合
     * @var \Oceanengine\Models\ToolsEbpAppExtendUpdateV30RequestChannelInfoListInner[]
     */
    protected ?array $channelInfoList = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendUpdateV30Mode
     */
    protected ?string $mode = null;

    /**
     * 母包id
     * @var string
     */
    protected ?string $packageId = null;

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
     * @return \Oceanengine\Models\ToolsEbpAppExtendUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 部分更新模式下需要指定要更新的渠道号集合
     * @return \Oceanengine\Models\ToolsEbpAppExtendUpdateV30RequestChannelInfoListInner[]
     */
    public function getChannelInfoList(): ?array
    {
        return $this->channelInfoList;
    }

    /**
     * 部分更新模式下需要指定要更新的渠道号集合
     * @param \Oceanengine\Models\ToolsEbpAppExtendUpdateV30RequestChannelInfoListInner[] $channelInfoList
     * @return self
     */
    public function setChannelInfoList(?array $channelInfoList): self
    {
        $this->channelInfoList = $channelInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendUpdateV30Mode
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendUpdateV30Mode $mode
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * 母包id
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 母包id
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
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
        if ($this->channelInfoList !== null) {
            $result['channel_info_list'] = $this->channelInfoList;
        }
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
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
            $obj->accountType = (string) $v;
        }
        if (($v = $data['channel_info_list'] ?? null) !== null && is_array($v)) {
            $obj->channelInfoList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAppExtendUpdateV30RequestChannelInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['mode'] ?? null) !== null) {
            $obj->mode = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        return $obj;
    }
}
