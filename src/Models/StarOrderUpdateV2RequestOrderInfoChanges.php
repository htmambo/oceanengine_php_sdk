<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderUpdateV2RequestOrderInfoChanges implements \JsonSerializable
{
    /**
     * 组件点击监测链接
     * @var string
     */
    protected ?string $componentClickMonitorUrl = null;

    /**
     * 视频曝光监测链接/直播间进房监测链接
     * @var string
     */
    protected ?string $itemShowMonitorUrl = null;

    /**
     * 常规组件ID列表（最多一个）
     * @var int[]
     */
    protected ?array $linkComponentIds = null;

    /**
     * 组件点击监测链接
     * @return string
     */
    public function getComponentClickMonitorUrl(): ?string
    {
        return $this->componentClickMonitorUrl;
    }

    /**
     * 组件点击监测链接
     * @param string $componentClickMonitorUrl
     * @return self
     */
    public function setComponentClickMonitorUrl(?string $componentClickMonitorUrl): self
    {
        $this->componentClickMonitorUrl = $componentClickMonitorUrl;
        return $this;
    }

    /**
     * 视频曝光监测链接/直播间进房监测链接
     * @return string
     */
    public function getItemShowMonitorUrl(): ?string
    {
        return $this->itemShowMonitorUrl;
    }

    /**
     * 视频曝光监测链接/直播间进房监测链接
     * @param string $itemShowMonitorUrl
     * @return self
     */
    public function setItemShowMonitorUrl(?string $itemShowMonitorUrl): self
    {
        $this->itemShowMonitorUrl = $itemShowMonitorUrl;
        return $this;
    }

    /**
     * 常规组件ID列表（最多一个）
     * @return int[]
     */
    public function getLinkComponentIds(): ?array
    {
        return $this->linkComponentIds;
    }

    /**
     * 常规组件ID列表（最多一个）
     * @param int[] $linkComponentIds
     * @return self
     */
    public function setLinkComponentIds(?array $linkComponentIds): self
    {
        $this->linkComponentIds = $linkComponentIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->componentClickMonitorUrl !== null) {
            $result['component_click_monitor_url'] = $this->componentClickMonitorUrl;
        }
        if ($this->itemShowMonitorUrl !== null) {
            $result['item_show_monitor_url'] = $this->itemShowMonitorUrl;
        }
        if ($this->linkComponentIds !== null) {
            $result['link_component_ids'] = $this->linkComponentIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_click_monitor_url'] ?? null) !== null) {
            $obj->componentClickMonitorUrl = (string) $v;
        }
        if (($v = $data['item_show_monitor_url'] ?? null) !== null) {
            $obj->itemShowMonitorUrl = (string) $v;
        }
        if (($v = $data['link_component_ids'] ?? null) !== null && is_array($v)) {
            $obj->linkComponentIds = $v;
        }
        return $obj;
    }
}
