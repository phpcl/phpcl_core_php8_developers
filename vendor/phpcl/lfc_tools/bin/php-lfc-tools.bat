cd "%CD%"

set USAGE="Usage: phpcl-lfc-tools.bat start|stop|deploy|creds"
set WHAT=%1

if not defined WHAT goto usage
if not "%WHAT%" = "start" goto not_lfc
if not "%WHAT%" = "stop" goto not_lfc
if not "%WHAT%" = "deploy" goto not_lfc
php vendor/bin/linuxforcomposer.phar docker:run %WHAT%
goto done

:not_lfc
if not "%WHAT%" = "creds" goto usage
php vendor/phpcl/lfc_tools/generate_creds.php %2% %3% %4% %5% %6%
goto done

:done
exit 0

:usage
echo %USAGE%
exit 1
