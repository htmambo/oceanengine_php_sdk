<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2Filter implements \JsonSerializable
{
    /**
     * 模板名称关键词
     * @var string
     */
    protected ?string $keywordOfName = null;

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @var int[]
     */
    protected ?array $siteIds = null;

    /**
     * 模板ID数组，【基于站点创建模板】接口创建的模板ID
     * @var int[]
     */
    protected ?array $templateIds = null;

    /**
     * 模板名称关键词
     * @return string
     */
    public function getKeywordOfName(): ?string
    {
        return $this->keywordOfName;
    }

    /**
     * 模板名称关键词
     * @param string $keywordOfName
     * @return self
     */
    public function setKeywordOfName(?string $keywordOfName): self
    {
        $this->keywordOfName = $keywordOfName;
        return $this;
    }

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @return int[]
     */
    public function getSiteIds(): ?array
    {
        return $this->siteIds;
    }

    /**
     * 站点ID，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @param int[] $siteIds
     * @return self
     */
    public function setSiteIds(?array $siteIds): self
    {
        $this->siteIds = $siteIds;
        return $this;
    }

    /**
     * 模板ID数组，【基于站点创建模板】接口创建的模板ID
     * @return int[]
     */
    public function getTemplateIds(): ?array
    {
        return $this->templateIds;
    }

    /**
     * 模板ID数组，【基于站点创建模板】接口创建的模板ID
     * @param int[] $templateIds
     * @return self
     */
    public function setTemplateIds(?array $templateIds): self
    {
        $this->templateIds = $templateIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->keywordOfName !== null) {
            $result['keyword_of_name'] = $this->keywordOfName;
        }
        if ($this->siteIds !== null) {
            $result['site_ids'] = $this->siteIds;
        }
        if ($this->templateIds !== null) {
            $result['template_ids'] = $this->templateIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['keyword_of_name'] ?? null) !== null) {
            $obj->keywordOfName = (string) $v;
        }
        if (($v = $data['site_ids'] ?? null) !== null && is_array($v)) {
            $obj->siteIds = $v;
        }
        if (($v = $data['template_ids'] ?? null) !== null && is_array($v)) {
            $obj->templateIds = $v;
        }
        return $obj;
    }
}
