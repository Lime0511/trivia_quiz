# Trivia Quiz Project

## Project Description:
- This is a simple trivia quiz web application developed in three iterations. The quiz allows users to answer multiple-choice questions, see their scores, and view a leaderboard. The project demonstrates progressive development using HTML, CSS, and JavaScript, with enhanced features added in each iteration.

## Iteration Report

### Iteration 1:
- Added basic HTML structure and quiz layout.
- Implemented question display with answer buttons.
- Added answer reveal functionality.
- Applied basic CSS styling for layout and buttons.

### Iteration 2:
- Added welcome screen with user name input.
- Implemented scoring system and feedback for correct/incorrect answers.
- Added final score display and leaderboard layout.
- Enhanced CSS styling with animations and responsive design.
- Added restart quiz functionality.

### Iteration 3:
- Integrated Font Awesome icons and audio elements for background music and sound effects.
- Added progress bar to show quiz progress.
- Implemented leaderboard persistence using localStorage.
- Added confetti animation on quiz completion.
- Included social media share buttons.
- Improved UI styling and animations.
- Added audio controls and mute functionality.

## Branching and Merging Strategy:
- For each iteration, a separate branch (`iteration-1`, `iteration-2`, `iteration-3`) was created to isolate development.
- Features were developed and tested within their respective branches.
- After completing each iteration, the branch was merged into the main branch to keep the main codebase stable and up-to-date.
- Tags (`v1.0`, `v2.0`, `v3.0`) were created after merging each iteration to mark stable release points.
- This strategy allowed organised, incremental development and easy tracking of progress.

## How This Workflow Helped:
- Using branches for each iteration prevented conflicts and allowed focused development on features.
- Merging ensured that the main branch always contained the latest stable code.
- Tagging provided clear milestones for each version, simplifying version control and review.
- The workflow supported clear documentation of progress and made collaboration easier.

## How to Run the Quiz:
- Clone the repository or download the source code.
- Open `SourceCode/Iteration3/index.html` (or any iteration folder) in a modern web browser.
- For the full experience, use Iteration 3 with audio and leaderboard features.

## PHP and Database Integration:
- The project uses PHP scripts to connect to a MySQL/MariaDB database.
- `db.php`: Handles the database connection.
- `save_score.php`: Receives quiz results and saves them to the `leaderboard` table.
- `get_leaderboard.php`: Retrieves leaderboard data for display.
- The database structure is defined in `quiz_db.sql` (see `/database` folder).

## Setup Steps:
1. Import the SQL file into your database (see Database Setup section).
2. Edit `db.php` with your local database credentials.
3. Place all files in your web server's root directory (e.g., `htdocs` for XAMPP).
4. Open the HTML files in your browser to use the quiz.
