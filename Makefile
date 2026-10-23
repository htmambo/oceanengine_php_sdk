# 巨量引擎开放平台 PHP SDK —— 上游同步相关入口
#
# 常用目标：
#   make help        查看所有目标
#   make sync        拉取上游 → 重新生成 → parity → lint → 测试 → 变更报告
#   make check       只读校验（CI 用，不写任何文件）
#   make generate    仅重新生成（models / api / client）
#   make parity      仅跑 Go ↔ PHP 一致性校验
#   make lint        仅跑全量 php -l 语法检查
#   make test        仅跑两个冒烟测试
#
# 上游 Go SDK 路径可用 UPSTREAM 覆盖：
#   make sync UPSTREAM=/path/to/ad_open_sdk_go

UPSTREAM ?= ../ad_open_sdk_go
PYTHON   ?= python3
PHP      ?= php
TOOLS    := tools/go2php

.PHONY: help sync check generate test parity lint clean-cache

help:
	@echo "巨量引擎 PHP SDK —— 可用目标："
	@echo "  make sync        拉取上游 → 重新生成 → parity → lint → 测试 → 变更报告"
	@echo "  make check       只读校验：上游是否有待同步更新 + parity + lint + 测试"
	@echo "  make generate    仅重新生成 PHP 代码（models / api / client）"
	@echo "  make parity      仅跑 Go ↔ PHP 一致性校验（parity.py）"
	@echo "  make lint        仅跑全量 php -l 语法检查"
	@echo "  make test        仅跑冒烟测试（smoke.php / _core_smoke.php）"
	@echo "  make clean-cache 清理 Python 字节码缓存"
	@echo ""
	@echo "  当前 UPSTREAM = $(UPSTREAM)"

sync:
	$(PYTHON) $(TOOLS)/sync.py --upstream $(UPSTREAM) --out .

check:
	$(PYTHON) $(TOOLS)/sync.py --upstream $(UPSTREAM) --out . --check

generate:
	$(PYTHON) $(TOOLS)/models.py --upstream $(UPSTREAM) --out .
	$(PYTHON) $(TOOLS)/api.py --upstream $(UPSTREAM) --out .
	$(PYTHON) $(TOOLS)/client.py --upstream $(UPSTREAM) --out .

parity:
	$(PYTHON) $(TOOLS)/parity.py --upstream $(UPSTREAM) --out .

lint:
	@$(PYTHON) -c 'import sys; sys.path.insert(0, "$(TOOLS)"); import sync; print("php -l OK (%d files)" % sync.run_lint("."))'

test:
	$(PHP) tests/smoke.php
	$(PHP) tests/_core_smoke.php

clean-cache:
	@rm -rf $(TOOLS)/__pycache__
	@echo "cleaned"
