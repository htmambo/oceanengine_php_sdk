<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInnerItemInfoListInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $awemeAuthorAvatar = null;

    /**
     * @var string
     */
    protected ?string $awemeAuthorName = null;

    /**
     * @var string
     */
    protected ?string $awemeAuthorUniqueId = null;

    /**
     * @var string[]
     */
    protected ?array $awemeItemCover = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var string
     */
    protected ?string $awemeItemTitle = null;

    /**
     * @return string[]
     */
    public function getAwemeAuthorAvatar(): ?array
    {
        return $this->awemeAuthorAvatar;
    }

    /**
     * @param string[] $awemeAuthorAvatar
     * @return self
     */
    public function setAwemeAuthorAvatar(?array $awemeAuthorAvatar): self
    {
        $this->awemeAuthorAvatar = $awemeAuthorAvatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeAuthorName(): ?string
    {
        return $this->awemeAuthorName;
    }

    /**
     * @param string $awemeAuthorName
     * @return self
     */
    public function setAwemeAuthorName(?string $awemeAuthorName): self
    {
        $this->awemeAuthorName = $awemeAuthorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeAuthorUniqueId(): ?string
    {
        return $this->awemeAuthorUniqueId;
    }

    /**
     * @param string $awemeAuthorUniqueId
     * @return self
     */
    public function setAwemeAuthorUniqueId(?string $awemeAuthorUniqueId): self
    {
        $this->awemeAuthorUniqueId = $awemeAuthorUniqueId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAwemeItemCover(): ?array
    {
        return $this->awemeItemCover;
    }

    /**
     * @param string[] $awemeItemCover
     * @return self
     */
    public function setAwemeItemCover(?array $awemeItemCover): self
    {
        $this->awemeItemCover = $awemeItemCover;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeItemTitle(): ?string
    {
        return $this->awemeItemTitle;
    }

    /**
     * @param string $awemeItemTitle
     * @return self
     */
    public function setAwemeItemTitle(?string $awemeItemTitle): self
    {
        $this->awemeItemTitle = $awemeItemTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeAuthorAvatar !== null) {
            $result['aweme_author_avatar'] = $this->awemeAuthorAvatar;
        }
        if ($this->awemeAuthorName !== null) {
            $result['aweme_author_name'] = $this->awemeAuthorName;
        }
        if ($this->awemeAuthorUniqueId !== null) {
            $result['aweme_author_unique_id'] = $this->awemeAuthorUniqueId;
        }
        if ($this->awemeItemCover !== null) {
            $result['aweme_item_cover'] = $this->awemeItemCover;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->awemeItemTitle !== null) {
            $result['aweme_item_title'] = $this->awemeItemTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_author_avatar'] ?? null) !== null && is_array($v)) {
            $obj->awemeAuthorAvatar = $v;
        }
        if (($v = $data['aweme_author_name'] ?? null) !== null) {
            $obj->awemeAuthorName = (string) $v;
        }
        if (($v = $data['aweme_author_unique_id'] ?? null) !== null) {
            $obj->awemeAuthorUniqueId = (string) $v;
        }
        if (($v = $data['aweme_item_cover'] ?? null) !== null && is_array($v)) {
            $obj->awemeItemCover = $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['aweme_item_title'] ?? null) !== null) {
            $obj->awemeItemTitle = (string) $v;
        }
        return $obj;
    }
}
