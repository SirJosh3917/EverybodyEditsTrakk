# EverybodyEditsTrakk
The Trakk source code of the now-dead Everybody Edits Trakk

# How to deploy
You must deploy it on a server, preferably yours.
Fill in the username, password, and database name of the MySqli things in the PHP file=
Open "createtable.txt" and while connected into your MySqli database of choice, copy and paste in the table.
Done!

# Using it after deployation
You need to include a link to "editblock.php", and specify GET parameters id, and home. Home is the link of which to go back to after all calculations have been completed in the PHP file, and the Id is the id of the block.
What to click in the link, you need to show an image, so make an image to "block.php" and specify GET parameters id. Id is the id of the block.

An example of this in HTMl would be the following:

```
<a href="http://www.sirjosh3917.com/eetrakk/editblock.php?id=1&home=http://www.sirjosh3917.com/eetrakk/index.html">
<img src="http://www.sirjosh3917.com/eetrakk/block.php?id=1"/>
</a>
```

And an example in BBCode would be the following:

```
[url=http://www.sirjosh3917.com/eetrakk/editblock.php?id=1&home=http://www.sirjosh3917.com/eetrakk/index.html]
[img]http://www.sirjosh3917.com/eetrakk/block.php?id=1[/img]
[/url]
```
