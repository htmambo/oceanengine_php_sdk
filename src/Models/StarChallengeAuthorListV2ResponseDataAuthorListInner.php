<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeAuthorListV2ResponseDataAuthorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $uid = null;

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
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->uid !== null) {
            $result['uid'] = $this->uid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['uid'] ?? null) !== null) {
            $obj->uid = (int) $v;
        }
        return $obj;
    }
}
