<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceListGetV10Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $audienceId = null;

    /**
     * @var string
     */
    protected ?string $audienceName = null;

    /**
     * @var \Oceanengine\Models\QianchuanAudienceListGetV10FilteringAudienceType[]
     */
    protected ?array $audienceType = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var int[]
     */
    protected ?array $status = null;

    /**
     * @return int[]
     */
    public function getAudienceId(): ?array
    {
        return $this->audienceId;
    }

    /**
     * @param int[] $audienceId
     * @return self
     */
    public function setAudienceId(?array $audienceId): self
    {
        $this->audienceId = $audienceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudienceName(): ?string
    {
        return $this->audienceName;
    }

    /**
     * @param string $audienceName
     * @return self
     */
    public function setAudienceName(?string $audienceName): self
    {
        $this->audienceName = $audienceName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAudienceListGetV10FilteringAudienceType[]
     */
    public function getAudienceType(): ?array
    {
        return $this->audienceType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceListGetV10FilteringAudienceType[] $audienceType
     * @return self
     */
    public function setAudienceType(?array $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
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
     * @return int[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param int[] $status
     * @return self
     */
    public function setStatus(?array $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceId !== null) {
            $result['audience_id'] = $this->audienceId;
        }
        if ($this->audienceName !== null) {
            $result['audience_name'] = $this->audienceName;
        }
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_id'] ?? null) !== null && is_array($v)) {
            $obj->audienceId = $v;
        }
        if (($v = $data['audience_name'] ?? null) !== null) {
            $obj->audienceName = (string) $v;
        }
        if (($v = $data['audience_type'] ?? null) !== null && is_array($v)) {
            $obj->audienceType = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        return $obj;
    }
}
