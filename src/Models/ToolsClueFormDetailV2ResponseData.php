<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueFormDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormDetailV2ResponseDataElementsInner[]
     */
    protected ?array $elements = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $subTitle = null;

    /**
     * @var string
     */
    protected ?string $submitText = null;

    /**
     * @var string
     */
    protected ?string $title = null;

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
     * @return \Oceanengine\Models\ToolsClueFormDetailV2ResponseDataElementsInner[]
     */
    public function getElements(): ?array
    {
        return $this->elements;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormDetailV2ResponseDataElementsInner[] $elements
     * @return self
     */
    public function setElements(?array $elements): self
    {
        $this->elements = $elements;
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
    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle(?string $subTitle): self
    {
        $this->subTitle = $subTitle;
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
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
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
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subTitle !== null) {
            $result['sub_title'] = $this->subTitle;
        }
        if ($this->submitText !== null) {
            $result['submit_text'] = $this->submitText;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
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
            $obj->elements = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueFormDetailV2ResponseDataElementsInner::fromArray($vv), $v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sub_title'] ?? null) !== null) {
            $obj->subTitle = (string) $v;
        }
        if (($v = $data['submit_text'] ?? null) !== null) {
            $obj->submitText = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
