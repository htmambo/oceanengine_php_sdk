<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeExpandRangeV2RequestParticipateAuthorRange implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $authorUids = null;

    /**
     * @var \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag
     */
    protected ?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag = null;

    /**
     * @var int[]
     */
    protected ?array $contentTags = null;

    /**
     * @var string[]
     */
    protected ?array $gender = null;

    /**
     * @var int
     */
    protected ?int $maxFollower = null;

    /**
     * @var int
     */
    protected ?int $minFollower = null;

    /**
     * @var string[]
     */
    protected ?array $provinces = null;

    /**
     * @return int[]
     */
    public function getAuthorUids(): ?array
    {
        return $this->authorUids;
    }

    /**
     * @param int[] $authorUids
     * @return self
     */
    public function setAuthorUids(?array $authorUids): self
    {
        $this->authorUids = $authorUids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag
     */
    public function getAuthorWatcherTag(): ?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag
    {
        return $this->authorWatcherTag;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag
     * @return self
     */
    public function setAuthorWatcherTag(?\Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag): self
    {
        $this->authorWatcherTag = $authorWatcherTag;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getContentTags(): ?array
    {
        return $this->contentTags;
    }

    /**
     * @param int[] $contentTags
     * @return self
     */
    public function setContentTags(?array $contentTags): self
    {
        $this->contentTags = $contentTags;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * @param string[] $gender
     * @return self
     */
    public function setGender(?array $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxFollower(): ?int
    {
        return $this->maxFollower;
    }

    /**
     * @param int $maxFollower
     * @return self
     */
    public function setMaxFollower(?int $maxFollower): self
    {
        $this->maxFollower = $maxFollower;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinFollower(): ?int
    {
        return $this->minFollower;
    }

    /**
     * @param int $minFollower
     * @return self
     */
    public function setMinFollower(?int $minFollower): self
    {
        $this->minFollower = $minFollower;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    /**
     * @param string[] $provinces
     * @return self
     */
    public function setProvinces(?array $provinces): self
    {
        $this->provinces = $provinces;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorUids !== null) {
            $result['author_uids'] = $this->authorUids;
        }
        if ($this->authorWatcherTag !== null) {
            $result['author_watcher_tag'] = $this->authorWatcherTag;
        }
        if ($this->contentTags !== null) {
            $result['content_tags'] = $this->contentTags;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->maxFollower !== null) {
            $result['max_follower'] = $this->maxFollower;
        }
        if ($this->minFollower !== null) {
            $result['min_follower'] = $this->minFollower;
        }
        if ($this->provinces !== null) {
            $result['provinces'] = $this->provinces;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_uids'] ?? null) !== null && is_array($v)) {
            $obj->authorUids = $v;
        }
        if (($v = $data['author_watcher_tag'] ?? null) !== null && is_array($v)) {
            $obj->authorWatcherTag = \Oceanengine\Models\StarChallengeExpandRangeV2RequestParticipateAuthorRangeAuthorWatcherTag::fromArray($v);
        }
        if (($v = $data['content_tags'] ?? null) !== null && is_array($v)) {
            $obj->contentTags = $v;
        }
        if (($v = $data['gender'] ?? null) !== null && is_array($v)) {
            $obj->gender = $v;
        }
        if (($v = $data['max_follower'] ?? null) !== null) {
            $obj->maxFollower = (int) $v;
        }
        if (($v = $data['min_follower'] ?? null) !== null) {
            $obj->minFollower = (int) $v;
        }
        if (($v = $data['provinces'] ?? null) !== null && is_array($v)) {
            $obj->provinces = $v;
        }
        return $obj;
    }
}
