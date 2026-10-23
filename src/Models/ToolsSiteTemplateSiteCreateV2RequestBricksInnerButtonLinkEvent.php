<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink $link = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink $link): self
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
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEventLink::fromArray($v);
        }
        return $obj;
    }
}
