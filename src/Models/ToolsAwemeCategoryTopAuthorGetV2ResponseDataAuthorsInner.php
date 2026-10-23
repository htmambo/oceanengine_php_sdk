<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeCategoryTopAuthorGetV2ResponseDataAuthorsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * @var string
     */
    protected ?string $avatar = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var string
     */
    protected ?string $categoryName = null;

    /**
     * @var string
     */
    protected ?string $coverNumStr = null;

    /**
     * @var int
     */
    protected ?int $labelId = null;

    /**
     * @var string
     */
    protected ?string $totalFansNumStr = null;

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
     * @return string
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return self
     */
    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverNumStr(): ?string
    {
        return $this->coverNumStr;
    }

    /**
     * @param string $coverNumStr
     * @return self
     */
    public function setCoverNumStr(?string $coverNumStr): self
    {
        $this->coverNumStr = $coverNumStr;
        return $this;
    }

    /**
     * @return int
     */
    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return self
     */
    public function setLabelId(?int $labelId): self
    {
        $this->labelId = $labelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalFansNumStr(): ?string
    {
        return $this->totalFansNumStr;
    }

    /**
     * @param string $totalFansNumStr
     * @return self
     */
    public function setTotalFansNumStr(?string $totalFansNumStr): self
    {
        $this->totalFansNumStr = $totalFansNumStr;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->categoryName !== null) {
            $result['category_name'] = $this->categoryName;
        }
        if ($this->coverNumStr !== null) {
            $result['cover_num_str'] = $this->coverNumStr;
        }
        if ($this->labelId !== null) {
            $result['label_id'] = $this->labelId;
        }
        if ($this->totalFansNumStr !== null) {
            $result['total_fans_num_str'] = $this->totalFansNumStr;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['avatar'] ?? null) !== null) {
            $obj->avatar = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['category_name'] ?? null) !== null) {
            $obj->categoryName = (string) $v;
        }
        if (($v = $data['cover_num_str'] ?? null) !== null) {
            $obj->coverNumStr = (string) $v;
        }
        if (($v = $data['label_id'] ?? null) !== null) {
            $obj->labelId = (int) $v;
        }
        if (($v = $data['total_fans_num_str'] ?? null) !== null) {
            $obj->totalFansNumStr = (string) $v;
        }
        return $obj;
    }
}
