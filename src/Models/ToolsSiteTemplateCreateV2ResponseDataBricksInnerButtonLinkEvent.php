<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink $link = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink $link): self
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
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEventLink::fromArray($v);
        }
        return $obj;
    }
}
