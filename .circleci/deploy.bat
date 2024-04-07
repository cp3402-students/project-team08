@echo off

REM Set variables
set "SOURCE_DIR=C:\xampp\htdocs\ASSIGNMENT 2\20240403_usersblog_0992e889c4a3bf857347_20240403101413_archive"
set "DEST_DIR=C:\Users\jc585494\OneDrive - James Cook University\Documents\Uni Work\CP3404\project-team08"
set "REPO_URL=https://github.com/cp3402-students/project-team08"

REM Pull latest changes from GitHub
git clone %REPO_URL% "%SOURCE_DIR%"

REM Copy files to deployment directory
xcopy /E /I /Y "%SOURCE_DIR%" "%DEST_DIR%"

echo Deployment completed.