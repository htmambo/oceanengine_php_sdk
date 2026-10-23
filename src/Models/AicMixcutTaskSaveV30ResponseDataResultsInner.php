<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMixcutTaskSaveV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 素材id，保存成功时有值
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 成功为:\"保存成功\", 失败为具体失败原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 推送成功或者失败: false 失败, true 成功
     * @var bool
     */
    protected ?bool $status = null;

    /**
     * 视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 素材id，保存成功时有值
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id，保存成功时有值
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 成功为:\"保存成功\", 失败为具体失败原因
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 成功为:\"保存成功\", 失败为具体失败原因
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 推送成功或者失败: false 失败, true 成功
     * @return bool
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * 推送成功或者失败: false 失败, true 成功
     * @param bool $status
     * @return self
     */
    public function setStatus(?bool $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频id
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (bool) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
