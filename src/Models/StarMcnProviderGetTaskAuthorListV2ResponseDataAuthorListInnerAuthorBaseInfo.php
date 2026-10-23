<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * @var string
     */
    protected ?string $nickName = null;

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
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
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
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        return $obj;
    }
}
