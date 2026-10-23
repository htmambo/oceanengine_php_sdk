<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink $androidLink = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink $iosLink = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink
     */
    public function getAndroidLink(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink
    {
        return $this->androidLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink $androidLink
     * @return self
     */
    public function setAndroidLink(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink $androidLink): self
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink
     */
    public function getIosLink(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink
    {
        return $this->iosLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink $iosLink
     * @return self
     */
    public function setIosLink(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink $iosLink): self
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
            $obj->androidLink = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventAndroidLink::fromArray($v);
        }
        if (($v = $data['ios_link'] ?? null) !== null && is_array($v)) {
            $obj->iosLink = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEventIosLink::fromArray($v);
        }
        return $obj;
    }
}
