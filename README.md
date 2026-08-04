# robot-voice-control-panel
Web-based control panel to drive a robot remotely via buttons or Arabic voice commands, built with PHP + MySQL, hosted free on InfinityFree.
# Robot Voice & Button Control Panel 🎤

A simple web-based control panel for remotely driving a robot — either by pressing buttons or by giving voice commands in Arabic. Built with PHP and MySQL, and runs for free on InfinityFree hosting.

## Features

- Control the robot with 5 buttons: forward, backward, left, right, stop
- Arabic voice control (e.g. "قدام", "خلف", "يمين", "يسار", "قف") using the Web Speech API
- Instantly updates the command state in a MySQL database
- Simple, responsive RTL design

## How It Works

1. The user presses a button or speaks a voice command in the browser
2. The page sends the command to update_command.php
3. The command is stored as a single character in the robot_state table
4. The robot (Arduino/ESP32 or any internet-connected device) continuously reads the latest command from get_state.php and executes the corresponding movement

## Files

| File | Purpose |
|---|---|
| control.html | Main page (button pad + voice control) |
| db.php | Database connection settings |
| update_command.php | Receives the command from the page and updates the database |
| get_state.php | Returns the latest stored command (used by the robot) |
| setup.sql | SQL to create the robot_state table |

## Installation

1. Create a MySQL database (e.g. via InfinityFree)
2. Run the contents of setup.sql in phpMyAdmin to create the table
3. Update the connection details in db.php:
     $host = "sqlXXX.infinityfree.com";
   $user = "epiz_XXXXXXXX";
   $pass = "your_password_here";
   $dbname = "epiz_XXXXXXXX_control_db";
   4. Upload the four files to the htdocs folder (or a subfolder) on your hosting
5. Open control.html in your browser and try it out

## Requirements

- A browser that supports the Web Speech API (Chrome or Edge recommended) for voice control
- Hosting with PHP and MySQL support

## Note

Speech recognition is currently set to Arabic only (`ar-SA`).

.<img width="1366" height="656" alt="control" src="https://github.com/user-attachments/assets/0401c0d0-6fc0-4e59-9770-99daa2f0d5b3" />
