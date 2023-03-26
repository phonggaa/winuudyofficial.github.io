@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\abcd\hypersonic\scripts\ctl.bat (start /MIN /B D:\abcd\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\abcd\ingres\scripts\ctl.bat (start /MIN /B D:\abcd\ingres\scripts\ctl.bat START)
if exist D:\abcd\mysql\scripts\ctl.bat (start /MIN /B D:\abcd\mysql\scripts\ctl.bat START)
if exist D:\abcd\postgresql\scripts\ctl.bat (start /MIN /B D:\abcd\postgresql\scripts\ctl.bat START)
if exist D:\abcd\apache\scripts\ctl.bat (start /MIN /B D:\abcd\apache\scripts\ctl.bat START)
if exist D:\abcd\openoffice\scripts\ctl.bat (start /MIN /B D:\abcd\openoffice\scripts\ctl.bat START)
if exist D:\abcd\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\abcd\apache-tomcat\scripts\ctl.bat START)
if exist D:\abcd\resin\scripts\ctl.bat (start /MIN /B D:\abcd\resin\scripts\ctl.bat START)
if exist D:\abcd\jetty\scripts\ctl.bat (start /MIN /B D:\abcd\jetty\scripts\ctl.bat START)
if exist D:\abcd\subversion\scripts\ctl.bat (start /MIN /B D:\abcd\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\abcd\lucene\scripts\ctl.bat (start /MIN /B D:\abcd\lucene\scripts\ctl.bat START)
if exist D:\abcd\third_application\scripts\ctl.bat (start /MIN /B D:\abcd\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\abcd\third_application\scripts\ctl.bat (start /MIN /B D:\abcd\third_application\scripts\ctl.bat STOP)
if exist D:\abcd\lucene\scripts\ctl.bat (start /MIN /B D:\abcd\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\abcd\subversion\scripts\ctl.bat (start /MIN /B D:\abcd\subversion\scripts\ctl.bat STOP)
if exist D:\abcd\jetty\scripts\ctl.bat (start /MIN /B D:\abcd\jetty\scripts\ctl.bat STOP)
if exist D:\abcd\hypersonic\scripts\ctl.bat (start /MIN /B D:\abcd\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\abcd\resin\scripts\ctl.bat (start /MIN /B D:\abcd\resin\scripts\ctl.bat STOP)
if exist D:\abcd\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\abcd\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\abcd\openoffice\scripts\ctl.bat (start /MIN /B D:\abcd\openoffice\scripts\ctl.bat STOP)
if exist D:\abcd\apache\scripts\ctl.bat (start /MIN /B D:\abcd\apache\scripts\ctl.bat STOP)
if exist D:\abcd\ingres\scripts\ctl.bat (start /MIN /B D:\abcd\ingres\scripts\ctl.bat STOP)
if exist D:\abcd\mysql\scripts\ctl.bat (start /MIN /B D:\abcd\mysql\scripts\ctl.bat STOP)
if exist D:\abcd\postgresql\scripts\ctl.bat (start /MIN /B D:\abcd\postgresql\scripts\ctl.bat STOP)

:end

