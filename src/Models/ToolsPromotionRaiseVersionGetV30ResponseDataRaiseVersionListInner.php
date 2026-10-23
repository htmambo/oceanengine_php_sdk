<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseVersionGetV30ResponseDataRaiseVersionListInner implements \JsonSerializable
{
    /**
     * 当前起量版本结束时间，格式：yyyy-mm-dd HH:MM
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 起量版本号
     * @var int
     */
    protected ?int $raiseVersion = null;

    /**
     * 当前版本起量开始时间，格式：yyyy-mm-dd HH:MM
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 当前起量版本结束时间，格式：yyyy-mm-dd HH:MM
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 当前起量版本结束时间，格式：yyyy-mm-dd HH:MM
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 起量版本号
     * @return int
     */
    public function getRaiseVersion(): ?int
    {
        return $this->raiseVersion;
    }

    /**
     * 起量版本号
     * @param int $raiseVersion
     * @return self
     */
    public function setRaiseVersion(?int $raiseVersion): self
    {
        $this->raiseVersion = $raiseVersion;
        return $this;
    }

    /**
     * 当前版本起量开始时间，格式：yyyy-mm-dd HH:MM
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 当前版本起量开始时间，格式：yyyy-mm-dd HH:MM
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
        if ($this->raiseVersion !== null) {
            $result['raise_version'] = $this->raiseVersion;
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
        if (($v = $data['raise_version'] ?? null) !== null) {
            $obj->raiseVersion = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
