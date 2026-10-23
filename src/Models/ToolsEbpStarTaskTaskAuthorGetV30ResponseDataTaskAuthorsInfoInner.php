<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskTaskAuthorGetV30ResponseDataTaskAuthorsInfoInner implements \JsonSerializable
{
    /**
     * 抖音号id
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var int
     */
    protected ?int $validItemCount = null;

    /**
     * 抖音号id
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音号昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidItemCount(): ?int
    {
        return $this->validItemCount;
    }

    /**
     * @param int $validItemCount
     * @return self
     */
    public function setValidItemCount(?int $validItemCount): self
    {
        $this->validItemCount = $validItemCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->validItemCount !== null) {
            $result['valid_item_count'] = $this->validItemCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['valid_item_count'] ?? null) !== null) {
            $obj->validItemCount = (int) $v;
        }
        return $obj;
    }
}
