<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTagOnTaskV2ResponseDataTagMapValueInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $tagId = null;

    /**
     * @var string
     */
    protected ?string $tagName = null;

    /**
     * @var int
     */
    protected ?int $type = null;

    /**
     * @return int
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     * @return self
     */
    public function setTagId(?int $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
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
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        return $obj;
    }
}
