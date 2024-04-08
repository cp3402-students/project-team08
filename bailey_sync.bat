REM Define variables
SET "LOCAL_WP_DIR=C:\xampp\htdocs\wordpress
SET "LOCAL_PROJECT_DIR=C:\Users\baile\OneDrive\Desktop\CP3402 Assignment\project-team08\project-team08

REM EXCLUDED_FILES=("file1.txt" "file2.php")  -- Exclude files if needed

REM Synchronize files from WordPress directory to local project directory
xcopy /E /I /Y "%LOCAL_WP_DIR%" "%LOCAL_PROJECT_DIR%"
