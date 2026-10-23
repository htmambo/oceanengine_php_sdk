<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendListV30Filtering implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $channelIdList = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return string[]
     */
    public function getChannelIdList(): ?array
    {
        return $this->channelIdList;
    }

    /**
     * @param string[] $channelIdList
     * @return self
     */
    public function setChannelIdList(?array $channelIdList): self
    {
        $this->channelIdList = $channelIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendListV30FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->channelIdList !== null) {
            $result['channel_id_list'] = $this->channelIdList;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel_id_list'] ?? null) !== null && is_array($v)) {
            $obj->channelIdList = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
