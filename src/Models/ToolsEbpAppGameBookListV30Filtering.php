<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppGameBookListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime
     */
    protected ?\Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime $scheduledPublishTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime
     */
    public function getScheduledPublishTime(): ?\Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime
    {
        return $this->scheduledPublishTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime $scheduledPublishTime
     * @return self
     */
    public function setScheduledPublishTime(?\Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime $scheduledPublishTime): self
    {
        $this->scheduledPublishTime = $scheduledPublishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringStatus $status
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
        if ($this->scheduledPublishTime !== null) {
            $result['scheduled_publish_time'] = $this->scheduledPublishTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['scheduled_publish_time'] ?? null) !== null && is_array($v)) {
            $obj->scheduledPublishTime = \Oceanengine\Models\ToolsEbpAppGameBookListV30FilteringScheduledPublishTime::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
