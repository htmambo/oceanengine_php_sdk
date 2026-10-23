<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableSaveV2ResponseData implements \JsonSerializable
{
    /**
     * 试玩素材ID
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * 试玩素材名
     * @var string
     */
    protected ?string $playableName = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableSaveV2DataPlayableOrientation
     */
    protected ?string $playableOrientation = null;

    /**
     * 试玩素材url
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableSaveV2DataStatus
     */
    protected ?string $status = null;

    /**
     * 试玩素材ID
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * 试玩素材ID
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * 试玩素材名
     * @return string
     */
    public function getPlayableName(): ?string
    {
        return $this->playableName;
    }

    /**
     * 试玩素材名
     * @param string $playableName
     * @return self
     */
    public function setPlayableName(?string $playableName): self
    {
        $this->playableName = $playableName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableSaveV2DataPlayableOrientation
     */
    public function getPlayableOrientation(): ?string
    {
        return $this->playableOrientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableSaveV2DataPlayableOrientation $playableOrientation
     * @return self
     */
    public function setPlayableOrientation(?string $playableOrientation): self
    {
        $this->playableOrientation = $playableOrientation;
        return $this;
    }

    /**
     * 试玩素材url
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * 试玩素材url
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableSaveV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableSaveV2DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
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
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        if ($this->playableName !== null) {
            $result['playable_name'] = $this->playableName;
        }
        if ($this->playableOrientation !== null) {
            $result['playable_orientation'] = $this->playableOrientation;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        if (($v = $data['playable_name'] ?? null) !== null) {
            $obj->playableName = (string) $v;
        }
        if (($v = $data['playable_orientation'] ?? null) !== null) {
            $obj->playableOrientation = (string) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
