<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseDataMaterialsInnerCreativeDataInner implements \JsonSerializable
{
    /**
     * 结束时间：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * cid
     * @var int
     */
    protected ?int $id = null;

    /**
     * 开始时间：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 结束时间：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间：yyyy-MM-dd HH:mm:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * cid
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * cid
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 开始时间：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间：yyyy-MM-dd HH:mm:ss
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
