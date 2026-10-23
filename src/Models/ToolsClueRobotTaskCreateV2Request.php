<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotTaskCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 剧本ID
     * @var int
     */
    protected ?int $scriptId = null;

    /**
     * 剧本变量配置信息
     * @var \Oceanengine\Models\ToolsClueRobotTaskCreateV2RequestScriptVariableConfigInner[]
     */
    protected ?array $scriptVariableConfig = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 剧本ID
     * @return int
     */
    public function getScriptId(): ?int
    {
        return $this->scriptId;
    }

    /**
     * 剧本ID
     * @param int $scriptId
     * @return self
     */
    public function setScriptId(?int $scriptId): self
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * 剧本变量配置信息
     * @return \Oceanengine\Models\ToolsClueRobotTaskCreateV2RequestScriptVariableConfigInner[]
     */
    public function getScriptVariableConfig(): ?array
    {
        return $this->scriptVariableConfig;
    }

    /**
     * 剧本变量配置信息
     * @param \Oceanengine\Models\ToolsClueRobotTaskCreateV2RequestScriptVariableConfigInner[] $scriptVariableConfig
     * @return self
     */
    public function setScriptVariableConfig(?array $scriptVariableConfig): self
    {
        $this->scriptVariableConfig = $scriptVariableConfig;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->scriptId !== null) {
            $result['script_id'] = $this->scriptId;
        }
        if ($this->scriptVariableConfig !== null) {
            $result['script_variable_config'] = $this->scriptVariableConfig;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['script_id'] ?? null) !== null) {
            $obj->scriptId = (int) $v;
        }
        if (($v = $data['script_variable_config'] ?? null) !== null && is_array($v)) {
            $obj->scriptVariableConfig = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRobotTaskCreateV2RequestScriptVariableConfigInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
