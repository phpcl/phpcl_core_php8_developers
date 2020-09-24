set USAGE="Usage: lfc.bat start|stop|deploy|creds"
set WHAT=%1
set DIR="%CD%"
set TOOLS_DIR=%DIR%\vendor\phpcl\lfc_tools
set LFC_DIR=%DIR%\vendor\linuxforphp\linuxforcomposer\bin

if not defined WHAT goto usage
if not "%WHAT%" = "creds" goto do_lfc
if not "%WHAT%" = "creds" goto usage
php %TOOLS_DIR%/generate_creds.php %2% %3% %4% %5% %6%
goto done

:do_lfc
php %LFC_DIR%/linuxforcomposer.phar docker:run %WHAT%
goto done

:done
exit 0

:usage
echo %USAGE%
exit 1
