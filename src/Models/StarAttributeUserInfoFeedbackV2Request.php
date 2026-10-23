<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarAttributeUserInfoFeedbackV2Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $caid = null;

    /**
     * @var string
     */
    protected ?string $gameName = null;

    /**
     * @var int
     */
    protected ?int $groupTag = null;

    /**
     * @var string
     */
    protected ?string $oaid = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $userTag = null;

    /**
     * @return string
     */
    public function getCaid(): ?string
    {
        return $this->caid;
    }

    /**
     * @param string $caid
     * @return self
     */
    public function setCaid(?string $caid): self
    {
        $this->caid = $caid;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameName(): ?string
    {
        return $this->gameName;
    }

    /**
     * @param string $gameName
     * @return self
     */
    public function setGameName(?string $gameName): self
    {
        $this->gameName = $gameName;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupTag(): ?int
    {
        return $this->groupTag;
    }

    /**
     * @param int $groupTag
     * @return self
     */
    public function setGroupTag(?int $groupTag): self
    {
        $this->groupTag = $groupTag;
        return $this;
    }

    /**
     * @return string
     */
    public function getOaid(): ?string
    {
        return $this->oaid;
    }

    /**
     * @param string $oaid
     * @return self
     */
    public function setOaid(?string $oaid): self
    {
        $this->oaid = $oaid;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserTag(): ?int
    {
        return $this->userTag;
    }

    /**
     * @param int $userTag
     * @return self
     */
    public function setUserTag(?int $userTag): self
    {
        $this->userTag = $userTag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->caid !== null) {
            $result['caid'] = $this->caid;
        }
        if ($this->gameName !== null) {
            $result['game_name'] = $this->gameName;
        }
        if ($this->groupTag !== null) {
            $result['group_tag'] = $this->groupTag;
        }
        if ($this->oaid !== null) {
            $result['oaid'] = $this->oaid;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->userTag !== null) {
            $result['user_tag'] = $this->userTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['caid'] ?? null) !== null) {
            $obj->caid = (string) $v;
        }
        if (($v = $data['game_name'] ?? null) !== null) {
            $obj->gameName = (string) $v;
        }
        if (($v = $data['group_tag'] ?? null) !== null) {
            $obj->groupTag = (int) $v;
        }
        if (($v = $data['oaid'] ?? null) !== null) {
            $obj->oaid = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['user_tag'] ?? null) !== null) {
            $obj->userTag = (int) $v;
        }
        return $obj;
    }
}
