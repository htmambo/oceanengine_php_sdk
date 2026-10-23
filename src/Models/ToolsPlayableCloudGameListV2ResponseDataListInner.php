<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableCloudGameListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListAdStatus
     */
    protected ?string $adStatus = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $effectiveTimeEnd = null;

    /**
     * @var string
     */
    protected ?string $effectiveTimeStart = null;

    /**
     * @var string
     */
    protected ?string $gameId = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListOrientation
     */
    protected ?string $orientation = null;

    /**
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $trialTime = null;

    /**
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListAdStatus
     */
    public function getAdStatus(): ?string
    {
        return $this->adStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListAdStatus $adStatus
     * @return self
     */
    public function setAdStatus(?string $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

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
     * @return string
     */
    public function getEffectiveTimeEnd(): ?string
    {
        return $this->effectiveTimeEnd;
    }

    /**
     * @param string $effectiveTimeEnd
     * @return self
     */
    public function setEffectiveTimeEnd(?string $effectiveTimeEnd): self
    {
        $this->effectiveTimeEnd = $effectiveTimeEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveTimeStart(): ?string
    {
        return $this->effectiveTimeStart;
    }

    /**
     * @param string $effectiveTimeStart
     * @return self
     */
    public function setEffectiveTimeStart(?string $effectiveTimeStart): self
    {
        $this->effectiveTimeStart = $effectiveTimeStart;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    /**
     * @param string $gameId
     * @return self
     */
    public function setGameId(?string $gameId): self
    {
        $this->gameId = $gameId;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
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
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListOrientation
     */
    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListOrientation $orientation
     * @return self
     */
    public function setOrientation(?string $orientation): self
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCloudGameListV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrialTime(): ?int
    {
        return $this->trialTime;
    }

    /**
     * @param int $trialTime
     * @return self
     */
    public function setTrialTime(?int $trialTime): self
    {
        $this->trialTime = $trialTime;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->effectiveTimeEnd !== null) {
            $result['effective_time_end'] = $this->effectiveTimeEnd;
        }
        if ($this->effectiveTimeStart !== null) {
            $result['effective_time_start'] = $this->effectiveTimeStart;
        }
        if ($this->gameId !== null) {
            $result['game_id'] = $this->gameId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orientation !== null) {
            $result['orientation'] = $this->orientation;
        }
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->trialTime !== null) {
            $result['trial_time'] = $this->trialTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_status'] ?? null) !== null) {
            $obj->adStatus = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['effective_time_end'] ?? null) !== null) {
            $obj->effectiveTimeEnd = (string) $v;
        }
        if (($v = $data['effective_time_start'] ?? null) !== null) {
            $obj->effectiveTimeStart = (string) $v;
        }
        if (($v = $data['game_id'] ?? null) !== null) {
            $obj->gameId = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['orientation'] ?? null) !== null) {
            $obj->orientation = (string) $v;
        }
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['trial_time'] ?? null) !== null) {
            $obj->trialTime = (int) $v;
        }
        return $obj;
    }
}
