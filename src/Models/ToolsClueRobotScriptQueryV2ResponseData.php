<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotScriptQueryV2ResponseData implements \JsonSerializable
{
    /**
     * 列表数据
     * @var \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage
     */
    protected ?\Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage $page = null;

    /**
     * 列表数据
     * @return \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 列表数据
     * @param \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\ToolsClueRobotScriptQueryV2ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
