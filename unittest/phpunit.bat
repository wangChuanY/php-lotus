ECHO OFF

REM �����û����ϵͳPath���������php.exe ,�����ڴ�����php.exe�ļ�·�� 
SET PHPDir=D:/kiss/PHP

REM ׷�ӵ�ϵͳPath����
SET Path=%PATH%;%PHPDir%

REM �ͷ��Զ����PHPDir����
SET PHPDir=

REM example: php.exe TestHelper.php --verbose Autoloader\PerformanceTuning.php
ECHO ON
php.exe TestHelper.php --verbose %*