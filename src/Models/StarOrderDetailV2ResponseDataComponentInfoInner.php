<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDetailV2ResponseDataComponentInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo
     */
    protected ?\Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo $linkComponentInfo = null;

    /**
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo
     */
    public function getLinkComponentInfo(): ?\Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo
    {
        return $this->linkComponentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo $linkComponentInfo
     * @return self
     */
    public function setLinkComponentInfo(?\Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo $linkComponentInfo): self
    {
        $this->linkComponentInfo = $linkComponentInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->linkComponentInfo !== null) {
            $result['link_component_info'] = $this->linkComponentInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link_component_info'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentInfo = \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInnerLinkComponentInfo::fromArray($v);
        }
        return $obj;
    }
}
