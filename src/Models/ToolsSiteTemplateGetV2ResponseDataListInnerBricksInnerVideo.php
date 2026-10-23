<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo $localVideo = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo $onlineVideo = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo
     */
    public function getLocalVideo(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo
    {
        return $this->localVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo $localVideo
     * @return self
     */
    public function setLocalVideo(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo $localVideo): self
    {
        $this->localVideo = $localVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo
     */
    public function getOnlineVideo(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo
    {
        return $this->onlineVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo $onlineVideo
     * @return self
     */
    public function setOnlineVideo(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo $onlineVideo): self
    {
        $this->onlineVideo = $onlineVideo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->localVideo !== null) {
            $result['local_video'] = $this->localVideo;
        }
        if ($this->onlineVideo !== null) {
            $result['online_video'] = $this->onlineVideo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['local_video'] ?? null) !== null && is_array($v)) {
            $obj->localVideo = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoLocalVideo::fromArray($v);
        }
        if (($v = $data['online_video'] ?? null) !== null && is_array($v)) {
            $obj->onlineVideo = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideoOnlineVideo::fromArray($v);
        }
        return $obj;
    }
}
