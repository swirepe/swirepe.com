@echo off
for %%F in (md/*.md) do pandoc md/%%F > include/%%~nF.php