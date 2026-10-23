<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo $localVideo = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo $onlineVideo = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo
     */
    public function getLocalVideo(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo
    {
        return $this->localVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo $localVideo
     * @return self
     */
    public function setLocalVideo(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo $localVideo): self
    {
        $this->localVideo = $localVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo
     */
    public function getOnlineVideo(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo
    {
        return $this->onlineVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo $onlineVideo
     * @return self
     */
    public function setOnlineVideo(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo $onlineVideo): self
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
            $obj->localVideo = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoLocalVideo::fromArray($v);
        }
        if (($v = $data['online_video'] ?? null) !== null && is_array($v)) {
            $obj->onlineVideo = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideoOnlineVideo::fromArray($v);
        }
        return $obj;
    }
}
