<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2RequestElementsInner[]
     */
    protected ?array $elements = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2EnableLayer
     */
    protected ?string $enableLayer = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2RequestExtendInfo
     */
    protected ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfo $extendInfo = null;

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
     * @var \Oceanengine\Models\ClueFormCreateV2ValidateType
     */
    protected ?string $validateType = null;

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
     * @return \Oceanengine\Models\ClueFormCreateV2RequestElementsInner[]
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2RequestElementsInner[] $elements
     * @return self
     */
    public function setElements(?array $elements): self
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2EnableLayer
     */
    public function getEnableLayer(): ?string
    {
        return $this->enableLayer;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2EnableLayer $enableLayer
     * @return self
     */
    public function setEnableLayer(?string $enableLayer): self
    {
        $this->enableLayer = $enableLayer;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2RequestExtendInfo
     */
    public function getExtendInfo(): ?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfo
    {
        return $this->extendInfo;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2RequestExtendInfo $extendInfo
     * @return self
     */
    public function setExtendInfo(?\Oceanengine\Models\ClueFormCreateV2RequestExtendInfo $extendInfo): self
    {
        $this->extendInfo = $extendInfo;
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
     * @return \Oceanengine\Models\ClueFormCreateV2ValidateType
     */
    public function getValidateType(): ?string
    {
        return $this->validateType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2ValidateType $validateType
     * @return self
     */
    public function setValidateType(?string $validateType): self
    {
        $this->validateType = $validateType;
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
        if ($this->elements !== null) {
            $result['elements'] = $this->elements;
        }
        if ($this->enableLayer !== null) {
            $result['enable_layer'] = $this->enableLayer;
        }
        if ($this->extendInfo !== null) {
            $result['extend_info'] = $this->extendInfo;
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
        if ($this->validateType !== null) {
            $result['validate_type'] = $this->validateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['elements'] ?? null) !== null && is_array($v)) {
            $obj->elements = array_map(fn ($vv) => \Oceanengine\Models\ClueFormCreateV2RequestElementsInner::fromArray($vv), $v);
        }
        if (($v = $data['enable_layer'] ?? null) !== null) {
            $obj->enableLayer = (string) $v;
        }
        if (($v = $data['extend_info'] ?? null) !== null && is_array($v)) {
            $obj->extendInfo = \Oceanengine\Models\ClueFormCreateV2RequestExtendInfo::fromArray($v);
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
        if (($v = $data['validate_type'] ?? null) !== null) {
            $obj->validateType = (string) $v;
        }
        return $obj;
    }
}
