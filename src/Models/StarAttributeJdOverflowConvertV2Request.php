<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarAttributeJdOverflowConvertV2Request implements \JsonSerializable
{
    /**
     * 发生转化行为的秒级时间戳
     * @var int
     */
    protected ?int $convertTime = null;

    /**
     * 设备号sha256
     * @var string
     */
    protected ?string $deviceId = null;

    /**
     * 设备号类型
     * @var int
     */
    protected ?int $deviceType = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 发生转化行为的秒级时间戳
     * @return int
     */
    public function getConvertTime(): ?int
    {
        return $this->convertTime;
    }

    /**
     * 发生转化行为的秒级时间戳
     * @param int $convertTime
     * @return self
     */
    public function setConvertTime(?int $convertTime): self
    {
        $this->convertTime = $convertTime;
        return $this;
    }

    /**
     * 设备号sha256
     * @return string
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * 设备号sha256
     * @param string $deviceId
     * @return self
     */
    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * 设备号类型
     * @return int
     */
    public function getDeviceType(): ?int
    {
        return $this->deviceType;
    }

    /**
     * 设备号类型
     * @param int $deviceType
     * @return self
     */
    public function setDeviceType(?int $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
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
        if ($this->convertTime !== null) {
            $result['convert_time'] = $this->convertTime;
        }
        if ($this->deviceId !== null) {
            $result['device_id'] = $this->deviceId;
        }
        if ($this->deviceType !== null) {
            $result['device_type'] = $this->deviceType;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['convert_time'] ?? null) !== null) {
            $obj->convertTime = (int) $v;
        }
        if (($v = $data['device_id'] ?? null) !== null) {
            $obj->deviceId = (string) $v;
        }
        if (($v = $data['device_type'] ?? null) !== null) {
            $obj->deviceType = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
