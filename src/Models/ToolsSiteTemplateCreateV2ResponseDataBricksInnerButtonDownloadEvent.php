<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink $androidLink = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink $iosLink = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink
     */
    public function getAndroidLink(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink
    {
        return $this->androidLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink $androidLink
     * @return self
     */
    public function setAndroidLink(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink $androidLink): self
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink
     */
    public function getIosLink(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink
    {
        return $this->iosLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink $iosLink
     * @return self
     */
    public function setIosLink(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink $iosLink): self
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
            $obj->androidLink = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventAndroidLink::fromArray($v);
        }
        if (($v = $data['ios_link'] ?? null) !== null && is_array($v)) {
            $obj->iosLink = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEventIosLink::fromArray($v);
        }
        return $obj;
    }
}
