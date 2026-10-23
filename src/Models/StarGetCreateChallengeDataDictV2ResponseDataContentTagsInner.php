<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarGetCreateChallengeDataDictV2ResponseDataContentTagsInner implements \JsonSerializable
{
    /**
     * 父标签值，为0则无父标签
     * @var int
     */
    protected ?int $parentTagValue = null;

    /**
     * 内容标签名称
     * @var string
     */
    protected ?string $tagName = null;

    /**
     * 内容标签值
     * @var int
     */
    protected ?int $tagValue = null;

    /**
     * 父标签值，为0则无父标签
     * @return int
     */
    public function getParentTagValue(): ?int
    {
        return $this->parentTagValue;
    }

    /**
     * 父标签值，为0则无父标签
     * @param int $parentTagValue
     * @return self
     */
    public function setParentTagValue(?int $parentTagValue): self
    {
        $this->parentTagValue = $parentTagValue;
        return $this;
    }

    /**
     * 内容标签名称
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * 内容标签名称
     * @param string $tagName
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * 内容标签值
     * @return int
     */
    public function getTagValue(): ?int
    {
        return $this->tagValue;
    }

    /**
     * 内容标签值
     * @param int $tagValue
     * @return self
     */
    public function setTagValue(?int $tagValue): self
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->parentTagValue !== null) {
            $result['parent_tag_value'] = $this->parentTagValue;
        }
        if ($this->tagName !== null) {
            $result['tag_name'] = $this->tagName;
        }
        if ($this->tagValue !== null) {
            $result['tag_value'] = $this->tagValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['parent_tag_value'] ?? null) !== null) {
            $obj->parentTagValue = (int) $v;
        }
        if (($v = $data['tag_name'] ?? null) !== null) {
            $obj->tagName = (string) $v;
        }
        if (($v = $data['tag_value'] ?? null) !== null) {
            $obj->tagValue = (int) $v;
        }
        return $obj;
    }
}
