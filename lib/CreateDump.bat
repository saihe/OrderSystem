@echo off
echo �_���v�t�@�C�����쐬���܂�
set maria=I:\bin
set db=ordersystem
set pt=%~dp0%db%_%DATE%.sql
echo %pt%
%maria%\mysqldump -u root -p %db% >%pt%
pause