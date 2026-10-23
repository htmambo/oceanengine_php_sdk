<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasCreateBoostItemGroupV2ResponseData implements \JsonSerializable
{
    /**
     * 下单失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 是否下单成功
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 助推组ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 下单失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 下单失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 是否下单成功
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 是否下单成功
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * 助推组ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 助推组ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
