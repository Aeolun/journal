# Journal
A super basic mobile-compatible personal journal.

I needed something that would allow me to write down my thoughts about the day with a minimum of fuzz, and since I couldn't find anything simple enough. I built it.

Feel free to use or extend it as you want, pull requests are welcome, but the idea is that it's as simple as possible both code and feature wise.

![index view](http://i.imgur.com/V59ibI0.jpg)

# Installation
Just download and extract/clone anywhere. The code runs anywhere PHP runs, and data is stored in plain text files. You can modify the `config.php` file to edit the user and password required to access the site. You probably want to make sure only the public directory will be accessible from outside, so people can't read your entries.

# Features
- Write in the main textbox to add to the current day (timestamp will be added automatically)
- You can write down things as they happen, any new submit on the main textbox will be added to today
- Select a day after you wrote for it in the past, and edit the content therein
