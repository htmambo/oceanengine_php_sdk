<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo
     */
    protected ?\Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo $jointScopeInfo = null;

    /**
     * @var int[]
     */
    protected ?array $rtaId = null;

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
     * @return \Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo
     */
    public function getJointScopeInfo(): ?\Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo
    {
        return $this->jointScopeInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo $jointScopeInfo
     * @return self
     */
    public function setJointScopeInfo(?\Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo $jointScopeInfo): self
    {
        $this->jointScopeInfo = $jointScopeInfo;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRtaId(): ?array
    {
        return $this->rtaId;
    }

    /**
     * @param int[] $rtaId
     * @return self
     */
    public function setRtaId(?array $rtaId): self
    {
        $this->rtaId = $rtaId;
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
        if ($this->jointScopeInfo !== null) {
            $result['joint_scope_info'] = $this->jointScopeInfo;
        }
        if ($this->rtaId !== null) {
            $result['rta_id'] = $this->rtaId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['joint_scope_info'] ?? null) !== null && is_array($v)) {
            $obj->jointScopeInfo = \Oceanengine\Models\ToolsJointBidUpdateV30RequestJointScopeInfo::fromArray($v);
        }
        if (($v = $data['rta_id'] ?? null) !== null && is_array($v)) {
            $obj->rtaId = $v;
        }
        return $obj;
    }
}
