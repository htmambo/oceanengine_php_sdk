<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo
     */
    protected ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo $extendInfo = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $layerSubmitText = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $submitText = null;

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
     * @return \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo
     */
    public function getExtendInfo(): ?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo
    {
        return $this->extendInfo;
    }

    /**
     * @param \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo $extendInfo
     * @return self
     */
    public function setExtendInfo(?\Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo $extendInfo): self
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLayerSubmitText(): ?string
    {
        return $this->layerSubmitText;
    }

    /**
     * @param string $layerSubmitText
     * @return self
     */
    public function setLayerSubmitText(?string $layerSubmitText): self
    {
        $this->layerSubmitText = $layerSubmitText;
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
     * @return string
     */
    public function getSubmitText(): ?string
    {
        return $this->submitText;
    }

    /**
     * @param string $submitText
     * @return self
     */
    public function setSubmitText(?string $submitText): self
    {
        $this->submitText = $submitText;
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
        if ($this->extendInfo !== null) {
            $result['extend_info'] = $this->extendInfo;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->layerSubmitText !== null) {
            $result['layer_submit_text'] = $this->layerSubmitText;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->submitText !== null) {
            $result['submit_text'] = $this->submitText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['extend_info'] ?? null) !== null && is_array($v)) {
            $obj->extendInfo = \Oceanengine\Models\ClueFormUpdateV2RequestExtendInfo::fromArray($v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['layer_submit_text'] ?? null) !== null) {
            $obj->layerSubmitText = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['submit_text'] ?? null) !== null) {
            $obj->submitText = (string) $v;
        }
        return $obj;
    }
}
