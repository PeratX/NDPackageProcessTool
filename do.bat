@echo off
title Phar auto convertor
chcp 65001
cls
echo Converting...
E:\development\bin\php\php.exe a.php %*
echo Testing...
E:\development\bin\php\php.exe %*