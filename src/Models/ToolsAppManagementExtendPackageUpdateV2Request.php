<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2RequestChannelListInner[]
     */
    protected ?array $channelList = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2Mode
     */
    protected ?string $mode = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2RequestChannelListInner[]
     */
    public function getChannelList(): ?array
    {
        return $this->channelList;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2RequestChannelListInner[] $channelList
     * @return self
     */
    public function setChannelList(?array $channelList): self
    {
        $this->channelList = $channelList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2Mode
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2Mode $mode
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['channel_list'] ?? null) !== null && is_array($v)) {
            $obj->channelList = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementExtendPackageUpdateV2RequestChannelListInner::fromArray($vv), $v);
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
