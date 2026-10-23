<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange implements \JsonSerializable
{
    /**
     * 达人ID列表 达人的抖音uid（仅自定义结算可用）
     * @var int[]
     */
    protected ?array $authorUids = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag = null;

    /**
     * 达人内容类型标签列表 「投稿任务创建数据字典」返回的content_tags中标签的tag_value值构成的列表
     * @var int[]
     */
    protected ?array $contentTags = null;

    /**
     * 达人性别 “男”，“女”
     * @var string[]
     */
    protected ?array $gender = null;

    /**
     * 达人粉丝量范围最大值 不得小于min_follower(如有)
     * @var int
     */
    protected ?int $maxFollower = null;

    /**
     * 达人粉丝量范围最小值 非负整数
     * @var int
     */
    protected ?int $minFollower = null;

    /**
     * 达人省份 「投稿任务创建数据字典」返回的provinces中的项 形如“北京市”、“江苏省”
     * @var string[]
     */
    protected ?array $provinces = null;

    /**
     * 达人ID列表 达人的抖音uid（仅自定义结算可用）
     * @return int[]
     */
    public function getAuthorUids(): ?array
    {
        return $this->authorUids;
    }

    /**
     * 达人ID列表 达人的抖音uid（仅自定义结算可用）
     * @param int[] $authorUids
     * @return self
     */
    public function setAuthorUids(?array $authorUids): self
    {
        $this->authorUids = $authorUids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag
     */
    public function getAuthorWatcherTag(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag
    {
        return $this->authorWatcherTag;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag
     * @return self
     */
    public function setAuthorWatcherTag(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag $authorWatcherTag): self
    {
        $this->authorWatcherTag = $authorWatcherTag;
        return $this;
    }

    /**
     * 达人内容类型标签列表 「投稿任务创建数据字典」返回的content_tags中标签的tag_value值构成的列表
     * @return int[]
     */
    public function getContentTags(): ?array
    {
        return $this->contentTags;
    }

    /**
     * 达人内容类型标签列表 「投稿任务创建数据字典」返回的content_tags中标签的tag_value值构成的列表
     * @param int[] $contentTags
     * @return self
     */
    public function setContentTags(?array $contentTags): self
    {
        $this->contentTags = $contentTags;
        return $this;
    }

    /**
     * 达人性别 “男”，“女”
     * @return string[]
     */
    public function getGender(): ?array
    {
        return $this->gender;
    }

    /**
     * 达人性别 “男”，“女”
     * @param string[] $gender
     * @return self
     */
    public function setGender(?array $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * 达人粉丝量范围最大值 不得小于min_follower(如有)
     * @return int
     */
    public function getMaxFollower(): ?int
    {
        return $this->maxFollower;
    }

    /**
     * 达人粉丝量范围最大值 不得小于min_follower(如有)
     * @param int $maxFollower
     * @return self
     */
    public function setMaxFollower(?int $maxFollower): self
    {
        $this->maxFollower = $maxFollower;
        return $this;
    }

    /**
     * 达人粉丝量范围最小值 非负整数
     * @return int
     */
    public function getMinFollower(): ?int
    {
        return $this->minFollower;
    }

    /**
     * 达人粉丝量范围最小值 非负整数
     * @param int $minFollower
     * @return self
     */
    public function setMinFollower(?int $minFollower): self
    {
        $this->minFollower = $minFollower;
        return $this;
    }

    /**
     * 达人省份 「投稿任务创建数据字典」返回的provinces中的项 形如“北京市”、“江苏省”
     * @return string[]
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    /**
     * 达人省份 「投稿任务创建数据字典」返回的provinces中的项 形如“北京市”、“江苏省”
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
            $obj->authorWatcherTag = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRangeAuthorWatcherTag::fromArray($v);
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
