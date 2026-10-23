<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 保留字段和原接口兼容
     * @var int
     */
    protected ?int $needAudit = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 保留字段和原接口兼容
     * @return int
     */
    public function getNeedAudit(): ?int
    {
        return $this->needAudit;
    }

    /**
     * 保留字段和原接口兼容
     * @param int $needAudit
     * @return self
     */
    public function setNeedAudit(?int $needAudit): self
    {
        $this->needAudit = $needAudit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->needAudit !== null) {
            $result['need_audit'] = $this->needAudit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['need_audit'] ?? null) !== null) {
            $obj->needAudit = (int) $v;
        }
        return $obj;
    }
}
