<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMixcutTaskResultGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AicMixcutTaskResultGetV30DataStatus
     */
    protected ?string $status = null;

    /**
     * 视频信息
     * @var \Oceanengine\Models\AicMixcutTaskResultGetV30ResponseDataVideoInfosInner[]
     */
    protected ?array $videoInfos = null;

    /**
     * @return \Oceanengine\Models\AicMixcutTaskResultGetV30DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AicMixcutTaskResultGetV30DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 视频信息
     * @return \Oceanengine\Models\AicMixcutTaskResultGetV30ResponseDataVideoInfosInner[]
     */
    public function getVideoInfos(): ?array
    {
        return $this->videoInfos;
    }

    /**
     * 视频信息
     * @param \Oceanengine\Models\AicMixcutTaskResultGetV30ResponseDataVideoInfosInner[] $videoInfos
     * @return self
     */
    public function setVideoInfos(?array $videoInfos): self
    {
        $this->videoInfos = $videoInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoInfos !== null) {
            $result['video_infos'] = $this->videoInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['video_infos'] ?? null) !== null && is_array($v)) {
            $obj->videoInfos = array_map(fn ($vv) => \Oceanengine\Models\AicMixcutTaskResultGetV30ResponseDataVideoInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
