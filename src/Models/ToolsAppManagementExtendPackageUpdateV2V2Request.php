<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageUpdateV2V2Request implements \JsonSerializable
{
    /**
     * 账户ID，account_type对应的账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 渠道号信息，（mode=List时需指定），一次调用，list的size取值范围1～100
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2RequestChannelInfoListInner[]
     */
    protected ?array $channelInfoList = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Mode
     */
    protected ?string $mode = null;

    /**
     * 应用包ID，可通过「查询应用信息」接口查询获取
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * 账户ID，account_type对应的账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID，account_type对应的账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 渠道号信息，（mode=List时需指定），一次调用，list的size取值范围1～100
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2RequestChannelInfoListInner[]
     */
    public function getChannelInfoList(): ?array
    {
        return $this->channelInfoList;
    }

    /**
     * 渠道号信息，（mode=List时需指定），一次调用，list的size取值范围1～100
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2RequestChannelInfoListInner[] $channelInfoList
     * @return self
     */
    public function setChannelInfoList(?array $channelInfoList): self
    {
        $this->channelInfoList = $channelInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Mode
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2Mode $mode
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * 应用包ID，可通过「查询应用信息」接口查询获取
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * 应用包ID，可通过「查询应用信息」接口查询获取
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
            $obj->channelInfoList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2V2RequestChannelInfoListInner::fromArray($vv), $v);
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
