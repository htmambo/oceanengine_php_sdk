<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoGetV2ResponseDataListInnerRefundTagListInner implements \JsonSerializable
{
    /**
     * 返款标签id
     * @var int
     */
    protected ?int $tagId = null;

    /**
     * 返款标签name
     * @var string
     */
    protected ?string $tagName = null;

    /**
     * 返款标签id
     * @return int
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
     * 返款标签id
     * @param int $tagId
     * @return self
     */
    public function setTagId(?int $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }

    /**
     * 返款标签name
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * 返款标签name
     * @param string $tagName
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->tagId !== null) {
            $result['tag_id'] = $this->tagId;
        }
        if ($this->tagName !== null) {
            $result['tag_name'] = $this->tagName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['tag_id'] ?? null) !== null) {
            $obj->tagId = (int) $v;
        }
        if (($v = $data['tag_name'] ?? null) !== null) {
            $obj->tagName = (string) $v;
        }
        return $obj;
    }
}
