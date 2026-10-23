<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableGrantResultV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 推送任务创建的时间，格式：2020-06-03 16:08:47
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 推送目标（广告主id）
     * @var int
     */
    protected ?int $grantedId = null;

    /**
     * 推送成功后新生成的试玩素材ID
     * @var int
     */
    protected ?int $newPlayableId = null;

    /**
     * 推送成功后新生成的试玩素材url
     * @var string
     */
    protected ?string $newPlayableUrl = null;

    /**
     * 被推送的试玩素材id
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * 被推送的试玩素材url
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableGrantResultV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 推送任务创建的时间，格式：2020-06-03 16:08:47
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 推送任务创建的时间，格式：2020-06-03 16:08:47
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 推送目标（广告主id）
     * @return int
     */
    public function getGrantedId(): ?int
    {
        return $this->grantedId;
    }

    /**
     * 推送目标（广告主id）
     * @param int $grantedId
     * @return self
     */
    public function setGrantedId(?int $grantedId): self
    {
        $this->grantedId = $grantedId;
        return $this;
    }

    /**
     * 推送成功后新生成的试玩素材ID
     * @return int
     */
    public function getNewPlayableId(): ?int
    {
        return $this->newPlayableId;
    }

    /**
     * 推送成功后新生成的试玩素材ID
     * @param int $newPlayableId
     * @return self
     */
    public function setNewPlayableId(?int $newPlayableId): self
    {
        $this->newPlayableId = $newPlayableId;
        return $this;
    }

    /**
     * 推送成功后新生成的试玩素材url
     * @return string
     */
    public function getNewPlayableUrl(): ?string
    {
        return $this->newPlayableUrl;
    }

    /**
     * 推送成功后新生成的试玩素材url
     * @param string $newPlayableUrl
     * @return self
     */
    public function setNewPlayableUrl(?string $newPlayableUrl): self
    {
        $this->newPlayableUrl = $newPlayableUrl;
        return $this;
    }

    /**
     * 被推送的试玩素材id
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * 被推送的试玩素材id
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * 被推送的试玩素材url
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * 被推送的试玩素材url
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableGrantResultV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableGrantResultV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 任务id
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
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
        if ($this->grantedId !== null) {
            $result['granted_id'] = $this->grantedId;
        }
        if ($this->newPlayableId !== null) {
            $result['new_playable_id'] = $this->newPlayableId;
        }
        if ($this->newPlayableUrl !== null) {
            $result['new_playable_url'] = $this->newPlayableUrl;
        }
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['granted_id'] ?? null) !== null) {
            $obj->grantedId = (int) $v;
        }
        if (($v = $data['new_playable_id'] ?? null) !== null) {
            $obj->newPlayableId = (int) $v;
        }
        if (($v = $data['new_playable_url'] ?? null) !== null) {
            $obj->newPlayableUrl = (string) $v;
        }
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
