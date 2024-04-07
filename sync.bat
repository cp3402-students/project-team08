@echo off

REM Define variables
SET "LOCAL_WP_DIR=C:\xampp\htdocs\ASSIGNMENT 2\20240403_usersblog_0992e889c4a3bf857347_20240403101413_archive"
SET "LOCAL_PROJECT_DIR=C:\Users\jc585494\OneDrive - James Cook University\Documents\Uni Work\CP3404\project-team08"

REM EXCLUDED_FILES=("file1.txt" "file2.php")  -- Exclude files if needed

REM Synchronize files from WordPress directory to local project directory
xcopy /E /I /Y "%LOCAL_WP_DIR%" "%LOCAL_PROJECT_DIR%"
