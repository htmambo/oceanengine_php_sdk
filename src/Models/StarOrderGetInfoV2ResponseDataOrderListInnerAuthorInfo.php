<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo implements \JsonSerializable
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
     * 头像地址
     * @var string
     */
    protected ?string $avatarUri = null;

    /**
     * 联系电话
     * @var string
     */
    protected ?string $contactPhone = null;

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
     * 头像地址
     * @return string
     */
    public function getAvatarUri(): ?string
    {
        return $this->avatarUri;
    }

    /**
     * 头像地址
     * @param string $avatarUri
     * @return self
     */
    public function setAvatarUri(?string $avatarUri): self
    {
        $this->avatarUri = $avatarUri;
        return $this;
    }

    /**
     * 联系电话
     * @return string
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * 联系电话
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
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
        if ($this->avatarUri !== null) {
            $result['avatar_uri'] = $this->avatarUri;
        }
        if ($this->contactPhone !== null) {
            $result['contact_phone'] = $this->contactPhone;
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
        if (($v = $data['avatar_uri'] ?? null) !== null) {
            $obj->avatarUri = (string) $v;
        }
        if (($v = $data['contact_phone'] ?? null) !== null) {
            $obj->contactPhone = (string) $v;
        }
        return $obj;
    }
}
