<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink $link = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link'] ?? null) !== null && is_array($v)) {
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEventLink::fromArray($v);
        }
        return $obj;
    }
}
