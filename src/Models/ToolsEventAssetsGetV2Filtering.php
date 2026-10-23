<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAssetsGetV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp
     */
    protected ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp $app = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage
     */
    protected ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage $landingPage = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram
     */
    protected ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram $miniProgram = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp
     */
    protected ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp $quickApp = null;

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp
     */
    public function getApp(): ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp
    {
        return $this->app;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp $app
     * @return self
     */
    public function setApp(?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp $app): self
    {
        $this->app = $app;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage
     */
    public function getLandingPage(): ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage
    {
        return $this->landingPage;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage $landingPage
     * @return self
     */
    public function setLandingPage(?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage $landingPage): self
    {
        $this->landingPage = $landingPage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram
     */
    public function getMiniProgram(): ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram
    {
        return $this->miniProgram;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram $miniProgram
     * @return self
     */
    public function setMiniProgram(?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram $miniProgram): self
    {
        $this->miniProgram = $miniProgram;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp
     */
    public function getQuickApp(): ?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp
    {
        return $this->quickApp;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp $quickApp
     * @return self
     */
    public function setQuickApp(?\Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp $quickApp): self
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
        if ($this->landingPage !== null) {
            $result['landing_page'] = $this->landingPage;
        }
        if ($this->miniProgram !== null) {
            $result['mini_program'] = $this->miniProgram;
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
            $obj->app = \Oceanengine\Models\ToolsEventAssetsGetV2FilteringApp::fromArray($v);
        }
        if (($v = $data['landing_page'] ?? null) !== null && is_array($v)) {
            $obj->landingPage = \Oceanengine\Models\ToolsEventAssetsGetV2FilteringLandingPage::fromArray($v);
        }
        if (($v = $data['mini_program'] ?? null) !== null && is_array($v)) {
            $obj->miniProgram = \Oceanengine\Models\ToolsEventAssetsGetV2FilteringMiniProgram::fromArray($v);
        }
        if (($v = $data['quick_app'] ?? null) !== null && is_array($v)) {
            $obj->quickApp = \Oceanengine\Models\ToolsEventAssetsGetV2FilteringQuickApp::fromArray($v);
        }
        return $obj;
    }
}
