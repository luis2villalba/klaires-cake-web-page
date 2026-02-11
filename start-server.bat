@echo off
REM Script para iniciar el servidor local de Klaire's Cake
REM Asegúrate de tener PHP instalado en tu PATH

cd /d "%~dp0"

echo.
echo ============================================
echo  KLAIRE'S CAKE - Servidor Local
echo ============================================
echo.
echo Iniciando servidor en http://127.0.0.1:8000
echo Presiona CTRL+C para detener
echo.
echo ============================================
echo.

php -S 127.0.0.1:8000

pause

