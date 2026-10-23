<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageListV2V2Filtering implements \JsonSerializable
{
    /**
     * 渠道号 可通过渠道号筛选应用分包，单次支持传入渠道号个数<=50
     * @var string[]
     */
    protected ?array $channelId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime
     */
    protected ?\Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime $updateTime = null;

    /**
     * 渠道号 可通过渠道号筛选应用分包，单次支持传入渠道号个数<=50
     * @return string[]
     */
    public function getChannelId(): ?array
    {
        return $this->channelId;
    }

    /**
     * 渠道号 可通过渠道号筛选应用分包，单次支持传入渠道号个数<=50
     * @param string[] $channelId
     * @return self
     */
    public function setChannelId(?array $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime
     */
    public function getUpdateTime(): ?\Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime
    {
        return $this->updateTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime $updateTime
     * @return self
     */
    public function setUpdateTime(?\Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel_id'] ?? null) !== null && is_array($v)) {
            $obj->channelId = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null && is_array($v)) {
            $obj->updateTime = \Oceanengine\Models\ToolsAppManagementExtendPackageListV2V2FilteringUpdateTime::fromArray($v);
        }
        return $obj;
    }
}
