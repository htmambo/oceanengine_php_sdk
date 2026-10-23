<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2ResponseData implements \JsonSerializable
{
    /**
     * 应用数据
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataAppInner[]
     */
    protected ?array $app = null;

    /**
     * 三方数据集合
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataLandingPagesInner[]
     */
    protected ?array $landingPages = null;

    /**
     * 字节小程序快应用资产
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataMiniProgramInner[]
     */
    protected ?array $miniProgram = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 快应用数据
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataQuickAppInner[]
     */
    protected ?array $quickApp = null;

    /**
     * 应用数据
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataAppInner[]
     */
    public function getApp(): ?array
    {
        return $this->app;
    }

    /**
     * 应用数据
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataAppInner[] $app
     * @return self
     */
    public function setApp(?array $app): self
    {
        $this->app = $app;
        return $this;
    }

    /**
     * 三方数据集合
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataLandingPagesInner[]
     */
    public function getLandingPages(): ?array
    {
        return $this->landingPages;
    }

    /**
     * 三方数据集合
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataLandingPagesInner[] $landingPages
     * @return self
     */
    public function setLandingPages(?array $landingPages): self
    {
        $this->landingPages = $landingPages;
        return $this;
    }

    /**
     * 字节小程序快应用资产
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataMiniProgramInner[]
     */
    public function getMiniProgram(): ?array
    {
        return $this->miniProgram;
    }

    /**
     * 字节小程序快应用资产
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataMiniProgramInner[] $miniProgram
     * @return self
     */
    public function setMiniProgram(?array $miniProgram): self
    {
        $this->miniProgram = $miniProgram;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 快应用数据
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataQuickAppInner[]
     */
    public function getQuickApp(): ?array
    {
        return $this->quickApp;
    }

    /**
     * 快应用数据
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataQuickAppInner[] $quickApp
     * @return self
     */
    public function setQuickApp(?array $quickApp): self
    {
        $this->quickApp = $quickApp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->app !== null) {
            $result['app'] = $this->app;
        }
        if ($this->landingPages !== null) {
            $result['landing_pages'] = $this->landingPages;
        }
        if ($this->miniProgram !== null) {
            $result['mini_program'] = $this->miniProgram;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->quickApp !== null) {
            $result['quick_app'] = $this->quickApp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app'] ?? null) !== null && is_array($v)) {
            $obj->app = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataAppInner::fromArray($vv), $v);
        }
        if (($v = $data['landing_pages'] ?? null) !== null && is_array($v)) {
            $obj->landingPages = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataLandingPagesInner::fromArray($vv), $v);
        }
        if (($v = $data['mini_program'] ?? null) !== null && is_array($v)) {
            $obj->miniProgram = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataMiniProgramInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['quick_app'] ?? null) !== null && is_array($v)) {
            $obj->quickApp = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventAssetsGetV2ResponseDataQuickAppInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
