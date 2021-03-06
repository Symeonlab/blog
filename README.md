# Laravel Blog Project




## Installation

First clone this repository, install the dependencies, and setup your .env file.

```bash
git clone or download project
composer install
cp .env.example .env
```
 Then create the necessary database.   
  ```bash
  php artisan db
create database blog
```

And run the initial migrations and seeders.
  ```bash
php artisan migrate --seed
  ```
## Documentation


Of course we only had time in the Laravel From Scratch series to review the essentials of a blogging platform. You can certainly take this many steps further. Here are some quick ideas that you might play with.

Add a status column to the posts table to allow for posts that are still in a "draft" state. Only when this status is changed to "published" should they show up in the blog feed.
Update the "Edit Post" page in the admin section to allow for changing the author of a post.
Add an RSS feed that lists all posts in chronological order.
Record/Track and display the "views_count" for each post.
Allow registered users to "follow" certain authors. When they publish a new post, an email should be delivered to all followers.
Allow registered users to "bookmark" certain posts that they enjoyed. Then display their bookmarks in a corresponding settings page.
Add an account page to update your username and upload an avatar for your profile.
