<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetAuthorListV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * @var bool
     */
    protected ?bool $isBlock = null;

    /**
     * @var bool
     */
    protected ?bool $isContracted = null;

    /**
     * @var bool
     */
    protected ?bool $isRealName = null;

    /**
     * @var int
     */
    protected ?int $validFansAmount = null;

    /**
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBlock(): ?bool
    {
        return $this->isBlock;
    }

    /**
     * @param bool $isBlock
     * @return self
     */
    public function setIsBlock(?bool $isBlock): self
    {
        $this->isBlock = $isBlock;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsContracted(): ?bool
    {
        return $this->isContracted;
    }

    /**
     * @param bool $isContracted
     * @return self
     */
    public function setIsContracted(?bool $isContracted): self
    {
        $this->isContracted = $isContracted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRealName(): ?bool
    {
        return $this->isRealName;
    }

    /**
     * @param bool $isRealName
     * @return self
     */
    public function setIsRealName(?bool $isRealName): self
    {
        $this->isRealName = $isRealName;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidFansAmount(): ?int
    {
        return $this->validFansAmount;
    }

    /**
     * @param int $validFansAmount
     * @return self
     */
    public function setValidFansAmount(?int $validFansAmount): self
    {
        $this->validFansAmount = $validFansAmount;
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
        if ($this->isBlock !== null) {
            $result['is_block'] = $this->isBlock;
        }
        if ($this->isContracted !== null) {
            $result['is_contracted'] = $this->isContracted;
        }
        if ($this->isRealName !== null) {
            $result['is_real_name'] = $this->isRealName;
        }
        if ($this->validFansAmount !== null) {
            $result['valid_fans_amount'] = $this->validFansAmount;
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
        if (($v = $data['is_block'] ?? null) !== null) {
            $obj->isBlock = (bool) $v;
        }
        if (($v = $data['is_contracted'] ?? null) !== null) {
            $obj->isContracted = (bool) $v;
        }
        if (($v = $data['is_real_name'] ?? null) !== null) {
            $obj->isRealName = (bool) $v;
        }
        if (($v = $data['valid_fans_amount'] ?? null) !== null) {
            $obj->validFansAmount = (int) $v;
        }
        return $obj;
    }
}
