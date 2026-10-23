<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatDataGetV2ResponseDataData implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 渠道来源
     * @var string
     */
    protected ?string $channel = null;

    /**
     * @var string
     */
    protected ?string $clickId = null;

    /**
     * 转化时间，格式\"YYYY-MM-DD hh:mm:ss\"
     * @var string
     */
    protected ?string $convertTime = null;

    /**
     * 创意id
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * 销售人员id
     * @var string[]
     */
    protected ?array $followUserIds = null;

    /**
     * 加粉用户好友昵称
     * @var string
     */
    protected ?string $wechatUserName = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 渠道来源
     * @return string
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * 渠道来源
     * @param string $channel
     * @return self
     */
    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getClickId(): ?string
    {
        return $this->clickId;
    }

    /**
     * @param string $clickId
     * @return self
     */
    public function setClickId(?string $clickId): self
    {
        $this->clickId = $clickId;
        return $this;
    }

    /**
     * 转化时间，格式\"YYYY-MM-DD hh:mm:ss\"
     * @return string
     */
    public function getConvertTime(): ?string
    {
        return $this->convertTime;
    }

    /**
     * 转化时间，格式\"YYYY-MM-DD hh:mm:ss\"
     * @param string $convertTime
     * @return self
     */
    public function setConvertTime(?string $convertTime): self
    {
        $this->convertTime = $convertTime;
        return $this;
    }

    /**
     * 创意id
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意id
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * 销售人员id
     * @return string[]
     */
    public function getFollowUserIds(): ?array
    {
        return $this->followUserIds;
    }

    /**
     * 销售人员id
     * @param string[] $followUserIds
     * @return self
     */
    public function setFollowUserIds(?array $followUserIds): self
    {
        $this->followUserIds = $followUserIds;
        return $this;
    }

    /**
     * 加粉用户好友昵称
     * @return string
     */
    public function getWechatUserName(): ?string
    {
        return $this->wechatUserName;
    }

    /**
     * 加粉用户好友昵称
     * @param string $wechatUserName
     * @return self
     */
    public function setWechatUserName(?string $wechatUserName): self
    {
        $this->wechatUserName = $wechatUserName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        if ($this->clickId !== null) {
            $result['click_id'] = $this->clickId;
        }
        if ($this->convertTime !== null) {
            $result['convert_time'] = $this->convertTime;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->followUserIds !== null) {
            $result['follow_user_ids'] = $this->followUserIds;
        }
        if ($this->wechatUserName !== null) {
            $result['wechat_user_name'] = $this->wechatUserName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['channel'] ?? null) !== null) {
            $obj->channel = (string) $v;
        }
        if (($v = $data['click_id'] ?? null) !== null) {
            $obj->clickId = (string) $v;
        }
        if (($v = $data['convert_time'] ?? null) !== null) {
            $obj->convertTime = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['follow_user_ids'] ?? null) !== null && is_array($v)) {
            $obj->followUserIds = $v;
        }
        if (($v = $data['wechat_user_name'] ?? null) !== null) {
            $obj->wechatUserName = (string) $v;
        }
        return $obj;
    }
}
