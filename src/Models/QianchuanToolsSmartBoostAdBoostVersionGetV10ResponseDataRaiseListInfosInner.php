<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseDataRaiseListInfosInner implements \JsonSerializable
{
    /**
     * 起量版本号
     * @var int
     */
    protected ?int $adRaiseVersion = null;

    /**
     * 当前起量版本结束时间，格式：2021-03-31 17:00:00
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 当前版本起量开始时间，格式：2021-03-31 16:00:00
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 起量版本号
     * @return int
     */
    public function getAdRaiseVersion(): ?int
    {
        return $this->adRaiseVersion;
    }

    /**
     * 起量版本号
     * @param int $adRaiseVersion
     * @return self
     */
    public function setAdRaiseVersion(?int $adRaiseVersion): self
    {
        $this->adRaiseVersion = $adRaiseVersion;
        return $this;
    }

    /**
     * 当前起量版本结束时间，格式：2021-03-31 17:00:00
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 当前起量版本结束时间，格式：2021-03-31 17:00:00
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 当前版本起量开始时间，格式：2021-03-31 16:00:00
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 当前版本起量开始时间，格式：2021-03-31 16:00:00
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
        if ($this->adRaiseVersion !== null) {
            $result['ad_raise_version'] = $this->adRaiseVersion;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_raise_version'] ?? null) !== null) {
            $obj->adRaiseVersion = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
