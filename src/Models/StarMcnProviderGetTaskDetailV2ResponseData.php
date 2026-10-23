<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseData implements \JsonSerializable
{
    /**
     * 单达人投稿/直播次数
     * @var int
     */
    protected ?int $maxPublishCount = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo $taskDetailInfo = null;

    /**
     * 单达人投稿/直播次数
     * @return int
     */
    public function getMaxPublishCount(): ?int
    {
        return $this->maxPublishCount;
    }

    /**
     * 单达人投稿/直播次数
     * @param int $maxPublishCount
     * @return self
     */
    public function setMaxPublishCount(?int $maxPublishCount): self
    {
        $this->maxPublishCount = $maxPublishCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo
     */
    public function getTaskDetailInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo
    {
        return $this->taskDetailInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo $taskDetailInfo
     * @return self
     */
    public function setTaskDetailInfo(?\Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo $taskDetailInfo): self
    {
        $this->taskDetailInfo = $taskDetailInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->maxPublishCount !== null) {
            $result['max_publish_count'] = $this->maxPublishCount;
        }
        if ($this->taskDetailInfo !== null) {
            $result['task_detail_info'] = $this->taskDetailInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['max_publish_count'] ?? null) !== null) {
            $obj->maxPublishCount = (int) $v;
        }
        if (($v = $data['task_detail_info'] ?? null) !== null && is_array($v)) {
            $obj->taskDetailInfo = \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfo::fromArray($v);
        }
        return $obj;
    }
}
