<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementUploadV30ResponseDataElementList implements \JsonSerializable
{
    /**
     * 创建时间，格式\"yyyy-mm-dd HH:MM:SS\"
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 即创原料库的元素ID
     * @var int
     */
    protected ?int $elementId = null;

    /**
     * 元素名称
     * @var string
     */
    protected ?string $elementName = null;

    /**
     * @var \Oceanengine\Models\AicElementUploadV30DataElementListElementType
     */
    protected ?string $elementType = null;

    /**
     * 元素url (视频或者图片的地址)
     * @var string
     */
    protected ?string $elementUrl = null;

    /**
     * 元素md5
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var \Oceanengine\Models\AicElementUploadV30DataElementListUseAs
     */
    protected ?string $useAs = null;

    /**
     * 创建时间，格式\"yyyy-mm-dd HH:MM:SS\"
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，格式\"yyyy-mm-dd HH:MM:SS\"
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 即创原料库的元素ID
     * @return int
     */
    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    /**
     * 即创原料库的元素ID
     * @param int $elementId
     * @return self
     */
    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * 元素名称
     * @return string
     */
    public function getElementName(): ?string
    {
        return $this->elementName;
    }

    /**
     * 元素名称
     * @param string $elementName
     * @return self
     */
    public function setElementName(?string $elementName): self
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUploadV30DataElementListElementType
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30DataElementListElementType $elementType
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * 元素url (视频或者图片的地址)
     * @return string
     */
    public function getElementUrl(): ?string
    {
        return $this->elementUrl;
    }

    /**
     * 元素url (视频或者图片的地址)
     * @param string $elementUrl
     * @return self
     */
    public function setElementUrl(?string $elementUrl): self
    {
        $this->elementUrl = $elementUrl;
        return $this;
    }

    /**
     * 元素md5
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 元素md5
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUploadV30DataElementListUseAs
     */
    public function getUseAs(): ?string
    {
        return $this->useAs;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30DataElementListUseAs $useAs
     * @return self
     */
    public function setUseAs(?string $useAs): self
    {
        $this->useAs = $useAs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->elementId !== null) {
            $result['element_id'] = $this->elementId;
        }
        if ($this->elementName !== null) {
            $result['element_name'] = $this->elementName;
        }
        if ($this->elementType !== null) {
            $result['element_type'] = $this->elementType;
        }
        if ($this->elementUrl !== null) {
            $result['element_url'] = $this->elementUrl;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->useAs !== null) {
            $result['use_as'] = $this->useAs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['element_id'] ?? null) !== null) {
            $obj->elementId = (int) $v;
        }
        if (($v = $data['element_name'] ?? null) !== null) {
            $obj->elementName = (string) $v;
        }
        if (($v = $data['element_type'] ?? null) !== null) {
            $obj->elementType = (string) $v;
        }
        if (($v = $data['element_url'] ?? null) !== null) {
            $obj->elementUrl = (string) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['use_as'] ?? null) !== null) {
            $obj->useAs = (string) $v;
        }
        return $obj;
    }
}
