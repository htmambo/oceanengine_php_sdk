<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GameplayListV30ResponseDataPlayInfosInner implements \JsonSerializable
{
    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 引导视频vid
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * 玩法介绍
     * @var string
     */
    protected ?string $playDesc = null;

    /**
     * 玩法id
     * @var int
     */
    protected ?int $playId = null;

    /**
     * 玩法名称
     * @var string
     */
    protected ?string $playName = null;

    /**
     * 玩法业务类型
     * @var \Oceanengine\Models\GameplayListV30DataPlayInfosPlayTypes[]
     */
    protected ?array $playTypes = null;

    /**
     * 验真视频vid
     * @var string
     */
    protected ?string $verifyVideoId = null;

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 引导视频vid
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * 引导视频vid
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * 玩法介绍
     * @return string
     */
    public function getPlayDesc(): ?string
    {
        return $this->playDesc;
    }

    /**
     * 玩法介绍
     * @param string $playDesc
     * @return self
     */
    public function setPlayDesc(?string $playDesc): self
    {
        $this->playDesc = $playDesc;
        return $this;
    }

    /**
     * 玩法id
     * @return int
     */
    public function getPlayId(): ?int
    {
        return $this->playId;
    }

    /**
     * 玩法id
     * @param int $playId
     * @return self
     */
    public function setPlayId(?int $playId): self
    {
        $this->playId = $playId;
        return $this;
    }

    /**
     * 玩法名称
     * @return string
     */
    public function getPlayName(): ?string
    {
        return $this->playName;
    }

    /**
     * 玩法名称
     * @param string $playName
     * @return self
     */
    public function setPlayName(?string $playName): self
    {
        $this->playName = $playName;
        return $this;
    }

    /**
     * 玩法业务类型
     * @return \Oceanengine\Models\GameplayListV30DataPlayInfosPlayTypes[]
     */
    public function getPlayTypes(): ?array
    {
        return $this->playTypes;
    }

    /**
     * 玩法业务类型
     * @param \Oceanengine\Models\GameplayListV30DataPlayInfosPlayTypes[] $playTypes
     * @return self
     */
    public function setPlayTypes(?array $playTypes): self
    {
        $this->playTypes = $playTypes;
        return $this;
    }

    /**
     * 验真视频vid
     * @return string
     */
    public function getVerifyVideoId(): ?string
    {
        return $this->verifyVideoId;
    }

    /**
     * 验真视频vid
     * @param string $verifyVideoId
     * @return self
     */
    public function setVerifyVideoId(?string $verifyVideoId): self
    {
        $this->verifyVideoId = $verifyVideoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        if ($this->playDesc !== null) {
            $result['play_desc'] = $this->playDesc;
        }
        if ($this->playId !== null) {
            $result['play_id'] = $this->playId;
        }
        if ($this->playName !== null) {
            $result['play_name'] = $this->playName;
        }
        if ($this->playTypes !== null) {
            $result['play_types'] = $this->playTypes;
        }
        if ($this->verifyVideoId !== null) {
            $result['verify_video_id'] = $this->verifyVideoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        if (($v = $data['play_desc'] ?? null) !== null) {
            $obj->playDesc = (string) $v;
        }
        if (($v = $data['play_id'] ?? null) !== null) {
            $obj->playId = (int) $v;
        }
        if (($v = $data['play_name'] ?? null) !== null) {
            $obj->playName = (string) $v;
        }
        if (($v = $data['play_types'] ?? null) !== null && is_array($v)) {
            $obj->playTypes = $v;
        }
        if (($v = $data['verify_video_id'] ?? null) !== null) {
            $obj->verifyVideoId = (string) $v;
        }
        return $obj;
    }
}
