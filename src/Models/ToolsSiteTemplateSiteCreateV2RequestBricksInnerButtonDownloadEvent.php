<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink $androidLink = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink $iosLink = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink
     */
    public function getAndroidLink(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink
    {
        return $this->androidLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink $androidLink
     * @return self
     */
    public function setAndroidLink(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink $androidLink): self
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink
     */
    public function getIosLink(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink
    {
        return $this->iosLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink $iosLink
     * @return self
     */
    public function setIosLink(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink $iosLink): self
    {
        $this->iosLink = $iosLink;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidLink !== null) {
            $result['android_link'] = $this->androidLink;
        }
        if ($this->iosLink !== null) {
            $result['ios_link'] = $this->iosLink;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_link'] ?? null) !== null && is_array($v)) {
            $obj->androidLink = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventAndroidLink::fromArray($v);
        }
        if (($v = $data['ios_link'] ?? null) !== null && is_array($v)) {
            $obj->iosLink = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEventIosLink::fromArray($v);
        }
        return $obj;
    }
}
