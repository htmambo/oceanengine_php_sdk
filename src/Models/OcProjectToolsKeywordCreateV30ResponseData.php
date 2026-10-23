<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordCreateV30ResponseData implements \JsonSerializable
{
    /**
     * （创建成功的）调控关键词调控任务名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * （创建成功的）调控关键词调控任务ID
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * （创建成功的）调控关键词调控任务名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * （创建成功的）调控关键词调控任务名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * （创建成功的）调控关键词调控任务ID
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * （创建成功的）调控关键词调控任务ID
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
