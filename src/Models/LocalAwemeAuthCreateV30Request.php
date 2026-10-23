<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAwemeAuthCreateV30AuthTargetType
     */
    protected ?string $authTargetType = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 授权结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 备注信息
     * @var string
     */
    protected ?string $note = null;

    /**
     * 授权开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthCreateV30AuthTargetType
     */
    public function getAuthTargetType(): ?string
    {
        return $this->authTargetType;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthCreateV30AuthTargetType $authTargetType
     * @return self
     */
    public function setAuthTargetType(?string $authTargetType): self
    {
        $this->authTargetType = $authTargetType;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 授权结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 授权结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 备注信息
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * 备注信息
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * 授权开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 授权开始时间
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
        if ($this->authTargetType !== null) {
            $result['auth_target_type'] = $this->authTargetType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->note !== null) {
            $result['note'] = $this->note;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_target_type'] ?? null) !== null) {
            $obj->authTargetType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['note'] ?? null) !== null) {
            $obj->note = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
