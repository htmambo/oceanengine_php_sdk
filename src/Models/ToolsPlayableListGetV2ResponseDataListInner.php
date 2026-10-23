<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableListGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * @var string
     */
    protected ?string $playableName = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableListGetV2DataListPlayableOrientation
     */
    protected ?string $playableOrientation = null;

    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableListGetV2DataListStatus
     */
    protected ?string $status = null;

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
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableName(): ?string
    {
        return $this->playableName;
    }

    /**
     * @param string $playableName
     * @return self
     */
    public function setPlayableName(?string $playableName): self
    {
        $this->playableName = $playableName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableListGetV2DataListPlayableOrientation
     */
    public function getPlayableOrientation(): ?string
    {
        return $this->playableOrientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableListGetV2DataListPlayableOrientation $playableOrientation
     * @return self
     */
    public function setPlayableOrientation(?string $playableOrientation): self
    {
        $this->playableOrientation = $playableOrientation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableListGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableListGetV2DataListStatus $status
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
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
