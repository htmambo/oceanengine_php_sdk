<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo implements \JsonSerializable
{
    /**
     * 抖音号头像
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * 抖音uid
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * 抖音昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeShowId = null;

    /**
     * 抖音号头像
     * @return string
     */
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * 抖音号头像
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * 抖音uid
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音uid
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeShowId(): ?string
    {
        return $this->awemeShowId;
    }

    /**
     * 抖音号
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
