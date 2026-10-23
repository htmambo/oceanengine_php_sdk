<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 组件列表
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInner[]
     */
    protected ?array $bricks = null;

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 模板ID
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * 模板名称
     * @var string
     */
    protected ?string $templateName = null;

    /**
     * 组件列表
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInner[]
     */
    public function getBricks(): ?array
    {
        return $this->bricks;
    }

    /**
     * 组件列表
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInner[] $bricks
     * @return self
     */
    public function setBricks(?array $bricks): self
    {
        $this->bricks = $bricks;
        return $this;
    }

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 模板ID
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * 模板ID
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * 模板名称
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * 模板名称
     * @param string $templateName
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bricks !== null) {
            $result['bricks'] = $this->bricks;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        if ($this->templateName !== null) {
            $result['template_name'] = $this->templateName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bricks'] ?? null) !== null && is_array($v)) {
            $obj->bricks = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInner::fromArray($vv), $v);
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        if (($v = $data['template_name'] ?? null) !== null) {
            $obj->templateName = (string) $v;
        }
        return $obj;
    }
}
