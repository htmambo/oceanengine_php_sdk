<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceStatusUpdateV30RequestDataInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30DataOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var int[]
     */
    protected ?array $scheduleIds = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30DataOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceStatusUpdateV30DataOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getScheduleIds(): ?array
    {
        return $this->scheduleIds;
    }

    /**
     * @param int[] $scheduleIds
     * @return self
     */
    public function setScheduleIds(?array $scheduleIds): self
    {
        $this->scheduleIds = $scheduleIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->scheduleIds !== null) {
            $result['schedule_ids'] = $this->scheduleIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['schedule_ids'] ?? null) !== null && is_array($v)) {
            $obj->scheduleIds = $v;
        }
        return $obj;
    }
}
