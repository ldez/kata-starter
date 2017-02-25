#!/usr/bin/env make -f

.DEFAULT_GOAL := help

# This prevents make from being confused by a file with the same name as the phony target.
.PHONY: help tests

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

VENDOR_BIN := vendor/bin

tests: ## run phpspec if available in vendor/bin
	@[ -x $(VENDOR_BIN)/phpspec ] && $(VENDOR_BIN)/phpspec run
