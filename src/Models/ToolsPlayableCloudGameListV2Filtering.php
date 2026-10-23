<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableCloudGameListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringAdStatus[]
     */
    protected ?array $adStatus = null;

    /**
     * @var string[]
     */
    protected ?array $gameIds = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringOrientation[]
     */
    protected ?array $orientation = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringStatus[]
     */
    protected ?array $status = null;

    /**
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringAdStatus[]
     */
    public function getAdStatus(): ?array
    {
        return $this->adStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringAdStatus[] $adStatus
     * @return self
     */
    public function setAdStatus(?array $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGameIds(): ?array
    {
        return $this->gameIds;
    }

    /**
     * @param string[] $gameIds
     * @return self
     */
    public function setGameIds(?array $gameIds): self
    {
        $this->gameIds = $gameIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringOrientation[]
     */
    public function getOrientation(): ?array
    {
        return $this->orientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringOrientation[] $orientation
     * @return self
     */
    public function setOrientation(?array $orientation): self
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringStatus[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2FilteringStatus[] $status
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
        if ($this->adStatus !== null) {
            $result['ad_status'] = $this->adStatus;
        }
        if ($this->gameIds !== null) {
            $result['game_ids'] = $this->gameIds;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orientation !== null) {
            $result['orientation'] = $this->orientation;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_status'] ?? null) !== null && is_array($v)) {
            $obj->adStatus = $v;
        }
        if (($v = $data['game_ids'] ?? null) !== null && is_array($v)) {
            $obj->gameIds = $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['orientation'] ?? null) !== null && is_array($v)) {
            $obj->orientation = $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        return $obj;
    }
}
