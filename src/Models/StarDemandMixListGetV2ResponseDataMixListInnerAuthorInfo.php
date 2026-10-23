<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandMixListGetV2ResponseDataMixListInnerAuthorInfo implements \JsonSerializable
{
    /**
     * 达人星图ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人抖音UID
     * @var int
     */
    protected ?int $coreUserId = null;

    /**
     * 达人昵称
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * 达人星图ID
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人星图ID
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人抖音UID
     * @return int
     */
    public function getCoreUserId(): ?int
    {
        return $this->coreUserId;
    }

    /**
     * 达人抖音UID
     * @param int $coreUserId
     * @return self
     */
    public function setCoreUserId(?int $coreUserId): self
    {
        $this->coreUserId = $coreUserId;
        return $this;
    }

    /**
     * 达人昵称
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * 达人昵称
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
        if ($this->coreUserId !== null) {
            $result['core_user_id'] = $this->coreUserId;
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
        if (($v = $data['core_user_id'] ?? null) !== null) {
            $obj->coreUserId = (int) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        return $obj;
    }
}
