<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableValidateV2ResponseData implements \JsonSerializable
{
    /**
     * 验证失败原因
     * @var string
     */
    protected ?string $failMessage = null;

    /**
     * 试玩素材ID
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableValidateV2DataPlayableOrientation
     */
    protected ?string $playableOrientation = null;

    /**
     * 试玩素材url
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableValidateV2DataStatus
     */
    protected ?string $status = null;

    /**
     * 验证失败原因
     * @return string
     */
    public function getFailMessage(): ?string
    {
        return $this->failMessage;
    }

    /**
     * 验证失败原因
     * @param string $failMessage
     * @return self
     */
    public function setFailMessage(?string $failMessage): self
    {
        $this->failMessage = $failMessage;
        return $this;
    }

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
     * @return \Oceanengine\Models\ToolsPlayableValidateV2DataPlayableOrientation
     */
    public function getPlayableOrientation(): ?string
    {
        return $this->playableOrientation;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableValidateV2DataPlayableOrientation $playableOrientation
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
     * @return \Oceanengine\Models\ToolsPlayableValidateV2DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableValidateV2DataStatus $status
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
        if ($this->failMessage !== null) {
            $result['fail_message'] = $this->failMessage;
        }
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
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
        if (($v = $data['fail_message'] ?? null) !== null) {
            $obj->failMessage = (string) $v;
        }
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
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
