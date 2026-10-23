<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AsyncTaskCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var bool
     */
    protected ?bool $force = null;

    /**
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @var \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams
     */
    protected ?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams $taskParams = null;

    /**
     * @var \Oceanengine\Models\AsyncTaskCreateV2TaskType
     */
    protected ?string $taskType = null;

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
     * @return bool
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * @param bool $force
     * @return self
     */
    public function setForce(?bool $force): self
    {
        $this->force = $force;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams
     */
    public function getTaskParams(): ?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams
    {
        return $this->taskParams;
    }

    /**
     * @param \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams $taskParams
     * @return self
     */
    public function setTaskParams(?\Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams $taskParams): self
    {
        $this->taskParams = $taskParams;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AsyncTaskCreateV2TaskType
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }

    /**
     * @param \Oceanengine\Models\AsyncTaskCreateV2TaskType $taskType
     * @return self
     */
    public function setTaskType(?string $taskType): self
    {
        $this->taskType = $taskType;
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
        if ($this->force !== null) {
            $result['force'] = $this->force;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        if ($this->taskParams !== null) {
            $result['task_params'] = $this->taskParams;
        }
        if ($this->taskType !== null) {
            $result['task_type'] = $this->taskType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['force'] ?? null) !== null) {
            $obj->force = (bool) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        if (($v = $data['task_params'] ?? null) !== null && is_array($v)) {
            $obj->taskParams = \Oceanengine\Models\AsyncTaskCreateV2RequestTaskParams::fromArray($v);
        }
        if (($v = $data['task_type'] ?? null) !== null) {
            $obj->taskType = (string) $v;
        }
        return $obj;
    }
}
