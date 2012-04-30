@echo off
both watch.bat -v -f md/*.md -c "pandoc --data-dir=include --from=markdown --to=html md/*.md" ++ watch.bat -v -f include/*.html -c "mv include/*.html include/*.php