<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskListV2ResponseDataDemandsInner implements \JsonSerializable
{
    /**
     * 任务创建时间，格式：yyyy-mm-dd HH:MM:SS
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 任务创建时间，格式：yyyy-mm-dd HH:MM:SS
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间，格式：yyyy-mm-dd HH:MM:SS
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        return $obj;
    }
}
