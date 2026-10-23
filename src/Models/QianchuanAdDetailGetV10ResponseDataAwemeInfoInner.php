<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataAwemeInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var string
     */
    protected ?string $awemeShowId = null;

    /**
     * @return string
     */
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeShowId(): ?string
    {
        return $this->awemeShowId;
    }

    /**
     * @param string $awemeShowId
     * @return self
     */
    public function setAwemeShowId(?string $awemeShowId): self
    {
        $this->awemeShowId = $awemeShowId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeShowId !== null) {
            $result['aweme_show_id'] = $this->awemeShowId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_show_id'] ?? null) !== null) {
            $obj->awemeShowId = (string) $v;
        }
        return $obj;
    }
}
