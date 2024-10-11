# WAD Database Upload to phpMyAdmin

This guide explains how to upload a Web Application Development (WAD) database to phpMyAdmin.

## Steps

### 1. Export the WAD Database

1. **Log in** to your database system (e.g., MySQL).
2. **Export the WAD database** using your database management tool or command line:
   - In **phpMyAdmin**:
     - Select the WAD database from the list.
     - Click on the **Export** tab.
     - Choose the **Quick** export method.
     - Select **SQL** as the format.
     - Click **Go** to download the `.sql` file.

### 2. Log in to phpMyAdmin

1. Open phpMyAdmin by going to your hosting control panel or via URL (e.g., `localhost/phpmyadmin`).
2. Enter your **username** and **password** to log in.

### 3. Create a New Database in phpMyAdmin

1. Click the **Databases** tab.
2. Enter a name for your new database (e.g., `waddatabase`).
3. Click **Create**.

### 4. Import the WAD Database

1. Select the newly created database.
2. Click on the **Import** tab.
3. Click **Choose File** and select the exported `.sql` file.
4. Ensure the format is set to **SQL**.
5. Click **Go** to begin the import.

### 5. Verify the Upload

1. After a successful import, a success message will appear.
2. Go to the **Structure** tab to verify all tables are uploaded correctly.

## Troubleshooting

- **Import Errors**: Ensure the SQL file is formatted correctly, and check for any size limitations on your hosting provider.
- **Missing Tables**: Double-check the export process or verify the integrity of the `.sql` file.
