<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsJointBidGetV30DataJointBidMode
     */
    protected ?string $jointBidMode = null;

    /**
     * @var int
     */
    protected ?int $jointId = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo
     */
    protected ?\Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo $jointScopeInfo = null;

    /**
     * @var int[]
     */
    protected ?array $rtaId = null;

    /**
     * @return \Oceanengine\Models\ToolsJointBidGetV30DataJointBidMode
     */
    public function getJointBidMode(): ?string
    {
        return $this->jointBidMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidGetV30DataJointBidMode $jointBidMode
     * @return self
     */
    public function setJointBidMode(?string $jointBidMode): self
    {
        $this->jointBidMode = $jointBidMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getJointId(): ?int
    {
        return $this->jointId;
    }

    /**
     * @param int $jointId
     * @return self
     */
    public function setJointId(?int $jointId): self
    {
        $this->jointId = $jointId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo
     */
    public function getJointScopeInfo(): ?\Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo
    {
        return $this->jointScopeInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo $jointScopeInfo
     * @return self
     */
    public function setJointScopeInfo(?\Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo $jointScopeInfo): self
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
        if ($this->jointBidMode !== null) {
            $result['joint_bid_mode'] = $this->jointBidMode;
        }
        if ($this->jointId !== null) {
            $result['joint_id'] = $this->jointId;
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
        if (($v = $data['joint_bid_mode'] ?? null) !== null) {
            $obj->jointBidMode = (string) $v;
        }
        if (($v = $data['joint_id'] ?? null) !== null) {
            $obj->jointId = (int) $v;
        }
        if (($v = $data['joint_scope_info'] ?? null) !== null && is_array($v)) {
            $obj->jointScopeInfo = \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfo::fromArray($v);
        }
        if (($v = $data['rta_id'] ?? null) !== null && is_array($v)) {
            $obj->rtaId = $v;
        }
        return $obj;
    }
}
