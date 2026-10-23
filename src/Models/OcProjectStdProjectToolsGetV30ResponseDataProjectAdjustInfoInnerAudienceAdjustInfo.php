<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInnerAudienceAdjustInfo implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $ifAudience = null;

    /**
     * @var int
     */
    protected ?int $quota = null;

    /**
     * @return bool
     */
    public function getIfAudience(): ?bool
    {
        return $this->ifAudience;
    }

    /**
     * @param bool $ifAudience
     * @return self
     */
    public function setIfAudience(?bool $ifAudience): self
    {
        $this->ifAudience = $ifAudience;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return self
     */
    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ifAudience !== null) {
            $result['if_audience'] = $this->ifAudience;
        }
        if ($this->quota !== null) {
            $result['quota'] = $this->quota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['if_audience'] ?? null) !== null) {
            $obj->ifAudience = (bool) $v;
        }
        if (($v = $data['quota'] ?? null) !== null) {
            $obj->quota = (int) $v;
        }
        return $obj;
    }
}
