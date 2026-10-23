<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueSmartphoneRecordV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $callDuration = null;

    /**
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var int
     */
    protected ?int $realDuration = null;

    /**
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var string
     */
    protected ?string $virtualNumber = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCallDuration(): ?int
    {
        return $this->callDuration;
    }

    /**
     * @param int $callDuration
     * @return self
     */
    public function setCallDuration(?int $callDuration): self
    {
        $this->callDuration = $callDuration;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRealDuration(): ?int
    {
        return $this->realDuration;
    }

    /**
     * @param int $realDuration
     * @return self
     */
    public function setRealDuration(?int $realDuration): self
    {
        $this->realDuration = $realDuration;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getVirtualNumber(): ?string
    {
        return $this->virtualNumber;
    }

    /**
     * @param string $virtualNumber
     * @return self
     */
    public function setVirtualNumber(?string $virtualNumber): self
    {
        $this->virtualNumber = $virtualNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->callDuration !== null) {
            $result['call_duration'] = $this->callDuration;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->realDuration !== null) {
            $result['real_duration'] = $this->realDuration;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->virtualNumber !== null) {
            $result['virtual_number'] = $this->virtualNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['call_duration'] ?? null) !== null) {
            $obj->callDuration = (int) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['real_duration'] ?? null) !== null) {
            $obj->realDuration = (int) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['virtual_number'] ?? null) !== null) {
            $obj->virtualNumber = (string) $v;
        }
        return $obj;
    }
}
