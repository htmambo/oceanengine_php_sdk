<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRubeexPlayableListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsRubeexPlayableListV2DataListAdStatus
     */
    protected ?string $adStatus = null;

    /**
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * @var string
     */
    protected ?string $playableName = null;

    /**
     * @var \Oceanengine\Models\ToolsRubeexPlayableListV2DataListPlayableOrientation
     */
    protected ?string $playableOrientation = null;

    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsRubeexPlayableListV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsRubeexPlayableListV2DataListAdStatus
     */
    public function getAdStatus(): ?string
    {
        return $this->adStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsRubeexPlayableListV2DataListAdStatus $adStatus
     * @return self
     */
    public function setAdStatus(?string $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    /**
     * @param string $dataMd5
     * @return self
     */
    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;
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
     * @return \Oceanengine\Models\ToolsRubeexPlayableListV2DataListPlayableOrientation
     */
    public function getPlayableOrientation(): ?string
    {
        return $this->playableOrientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsRubeexPlayableListV2DataListPlayableOrientation $playableOrientation
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
     * @return \Oceanengine\Models\ToolsRubeexPlayableListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsRubeexPlayableListV2DataListStatus $status
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
        if ($this->adStatus !== null) {
            $result['ad_status'] = $this->adStatus;
        }
        if ($this->dataMd5 !== null) {
            $result['data_md5'] = $this->dataMd5;
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
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_status'] ?? null) !== null) {
            $obj->adStatus = (string) $v;
        }
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
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
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
