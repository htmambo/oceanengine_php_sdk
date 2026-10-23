<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskDataV2ResponseDataItemListInnerAuthorInfo implements \JsonSerializable
{
    /**
     * 达人ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人名称
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $douyinId = null;

    /**
     * 达人ID
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人ID
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人名称
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 达人名称
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getDouyinId(): ?string
    {
        return $this->douyinId;
    }

    /**
     * 抖音号
     * @param string $douyinId
     * @return self
     */
    public function setDouyinId(?string $douyinId): self
    {
        $this->douyinId = $douyinId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->douyinId !== null) {
            $result['douyin_id'] = $this->douyinId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['douyin_id'] ?? null) !== null) {
            $obj->douyinId = (string) $v;
        }
        return $obj;
    }
}
