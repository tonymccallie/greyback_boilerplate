Greyback Boilerplate
====================

Usage:
------
1. Download the .zip file from above.
2. Files to edit for design
	* css/variables.less (can be created with https://kuler.adobe.com/ and downloaded from http://paintstrap.com/)
	* css/styles.less
	* index.html
3. Once site is ready to launch (all versions, including mobile) 
	* Compile styles.less into styles.min.css for better performance
	* Remove less-x.x.x.min.js

Notes:
------
Video Scaling: wrap videos with

```<div class="scaleVid ratio16x9">
	VIDEO HTML
</div>```

OR

```<div class="scaleVid ratio4x3">
	VIDEO HTML
</div>```

And remove any width/height attributes in the video html.

ToDo:
-----
- [X] Include the latest bootstrap, fontawesome, jquery, html5shiv, and less
- [X] Integrate bootstrap-responsive
- [ ] Dunno...

Upgrade:
--------
- FontAwesome
	* Overwrite font files and check path in font-awesome.less
- Bootstrap
	* Modify bootstrap.less for font-awesome.less and variables.less location