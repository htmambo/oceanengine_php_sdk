<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageCreateV2V2Request implements \JsonSerializable
{
    /**
     * 账户id，如广告主id、bpid等
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 创建数量，（mode=Auto时需指定）单次分包取值范围1~100
     * @var int
     */
    protected ?int $channelCount = null;

    /**
     * 自定义渠道号信息，（mode=Manual时需指定），一次调用，list的size取值范围1~100
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2RequestChannelListInner[]
     */
    protected ?array $channelList = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Mode
     */
    protected ?string $mode = null;

    /**
     * 应用包ID，从“查询应用信息”接口中获取
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 账户id，如广告主id、bpid等
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id，如广告主id、bpid等
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 创建数量，（mode=Auto时需指定）单次分包取值范围1~100
     * @return int
     */
    public function getChannelCount(): ?int
    {
        return $this->channelCount;
    }

    /**
     * 创建数量，（mode=Auto时需指定）单次分包取值范围1~100
     * @param int $channelCount
     * @return self
     */
    public function setChannelCount(?int $channelCount): self
    {
        $this->channelCount = $channelCount;
        return $this;
    }

    /**
     * 自定义渠道号信息，（mode=Manual时需指定），一次调用，list的size取值范围1~100
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2RequestChannelListInner[]
     */
    public function getChannelList(): ?array
    {
        return $this->channelList;
    }

    /**
     * 自定义渠道号信息，（mode=Manual时需指定），一次调用，list的size取值范围1~100
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2RequestChannelListInner[] $channelList
     * @return self
     */
    public function setChannelList(?array $channelList): self
    {
        $this->channelList = $channelList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Mode
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2Mode $mode
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * 应用包ID，从“查询应用信息”接口中获取
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包ID，从“查询应用信息”接口中获取
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
        if ($this->channelCount !== null) {
            $result['channel_count'] = $this->channelCount;
        }
        if ($this->channelList !== null) {
            $result['channel_list'] = $this->channelList;
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
        if (($v = $data['channel_count'] ?? null) !== null) {
            $obj->channelCount = (int) $v;
        }
        if (($v = $data['channel_list'] ?? null) !== null && is_array($v)) {
            $obj->channelList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementExtendPackageCreateV2V2RequestChannelListInner::fromArray($vv), $v);
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
