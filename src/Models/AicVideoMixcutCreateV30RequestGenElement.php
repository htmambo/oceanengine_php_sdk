<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicVideoMixcutCreateV30RequestGenElement implements \JsonSerializable
{
    /**
     * 视频/图片背景，用于放到视频背后的内容，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @var int
     */
    protected ?int $backgroundElementId = null;

    /**
     * 视频/图片前景，用于放到视频上层的内容,可用于风险提示图、装饰性包框等，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @var int
     */
    protected ?int $foregroundElementId = null;

    /**
     * 视频后贴，会拼接在视频开头； 最多5个，输入多个时，成片随机挑选一个使用
     * @var int[]
     */
    protected ?array $postVideoElementIds = null;

    /**
     * 视频前贴，会拼接在视频开头 最多5个，输入多个时，成片随机挑选一个使用
     * @var int[]
     */
    protected ?array $preVideoElementIds = null;

    /**
     * 视频/图片背景，用于放到视频背后的内容，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @return int
     */
    public function getBackgroundElementId(): ?int
    {
        return $this->backgroundElementId;
    }

    /**
     * 视频/图片背景，用于放到视频背后的内容，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @param int $backgroundElementId
     * @return self
     */
    public function setBackgroundElementId(?int $backgroundElementId): self
    {
        $this->backgroundElementId = $backgroundElementId;
        return $this;
    }

    /**
     * 视频/图片前景，用于放到视频上层的内容,可用于风险提示图、装饰性包框等，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @return int
     */
    public function getForegroundElementId(): ?int
    {
        return $this->foregroundElementId;
    }

    /**
     * 视频/图片前景，用于放到视频上层的内容,可用于风险提示图、装饰性包框等，推荐使用1080p大小图片或者视频，不足部分会用系统默认策略填充
     * @param int $foregroundElementId
     * @return self
     */
    public function setForegroundElementId(?int $foregroundElementId): self
    {
        $this->foregroundElementId = $foregroundElementId;
        return $this;
    }

    /**
     * 视频后贴，会拼接在视频开头； 最多5个，输入多个时，成片随机挑选一个使用
     * @return int[]
     */
    public function getPostVideoElementIds(): ?array
    {
        return $this->postVideoElementIds;
    }

    /**
     * 视频后贴，会拼接在视频开头； 最多5个，输入多个时，成片随机挑选一个使用
     * @param int[] $postVideoElementIds
     * @return self
     */
    public function setPostVideoElementIds(?array $postVideoElementIds): self
    {
        $this->postVideoElementIds = $postVideoElementIds;
        return $this;
    }

    /**
     * 视频前贴，会拼接在视频开头 最多5个，输入多个时，成片随机挑选一个使用
     * @return int[]
     */
    public function getPreVideoElementIds(): ?array
    {
        return $this->preVideoElementIds;
    }

    /**
     * 视频前贴，会拼接在视频开头 最多5个，输入多个时，成片随机挑选一个使用
     * @param int[] $preVideoElementIds
     * @return self
     */
    public function setPreVideoElementIds(?array $preVideoElementIds): self
    {
        $this->preVideoElementIds = $preVideoElementIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->backgroundElementId !== null) {
            $result['background_element_id'] = $this->backgroundElementId;
        }
        if ($this->foregroundElementId !== null) {
            $result['foreground_element_id'] = $this->foregroundElementId;
        }
        if ($this->postVideoElementIds !== null) {
            $result['post_video_element_ids'] = $this->postVideoElementIds;
        }
        if ($this->preVideoElementIds !== null) {
            $result['pre_video_element_ids'] = $this->preVideoElementIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['background_element_id'] ?? null) !== null) {
            $obj->backgroundElementId = (int) $v;
        }
        if (($v = $data['foreground_element_id'] ?? null) !== null) {
            $obj->foregroundElementId = (int) $v;
        }
        if (($v = $data['post_video_element_ids'] ?? null) !== null && is_array($v)) {
            $obj->postVideoElementIds = $v;
        }
        if (($v = $data['pre_video_element_ids'] ?? null) !== null && is_array($v)) {
            $obj->preVideoElementIds = $v;
        }
        return $obj;
    }
}
