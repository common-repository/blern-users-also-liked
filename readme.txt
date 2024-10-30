=== Plugin Name ===
Contributors: Jim Goss
Donate link: http://blern.com/
Tags: recommendation, personalization, blern, news, blog, articles, social
Requires at least: 2.1
Tested up to: 2.1
Stable tag: 1.3

Enables bloggers to incorporate Blern personalization content into their WordPress blog.

== Description ==

This plugin creates several new TemplateTags allowing users to add personalized Blern content on their blog.

The first TemplateTag, blern_users_also_liked, allows users to put a widget on their blog that displays a listing of
other news articles and blog posts. That list of articles is created by Blern.com using information about users
who indicated that they liked the article currently being displayed and contains other articles those users liked.

For example, Blern will look over the history of users who indicated they liked the article currently being viewed.
It will then look at the history of _other_ articles those users also liked. It then compiles that information
to display a list of articles that were most commonly liked by the users who liked the current article.

Another available TemplateTag, blern_buzzworthy, displays a list of articles that are unique and buzzworthy as
determined by Blern's unique algorithms for finding new articles that have unique and interesting content.

The blern_popular TemplateTag displays a list of the most popular articles on Blern.

The blern_mostrecommended TemplateTag displays a list of the most recommended articles on Blern.

== Installation ==

This section describes how to install the plugin and get it working.

To use either the blern_users_also_liked or blern_buzzworthy TemplateTags, follow these instructions. The example
shows the use of blern_users_also_liked, but you can easily change the title in step 3, replacing "Users Also Liked"
with "Buzzworthy" and replacing blern_users_also_liked with blern_buzzworthy.

1. Upload `blern-alsoliked.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the following code in your templates where you want to display the list of articles others liked:

			<li><h2><a href="http://blern.com">Blern</a> Users Also Liked</h2>
				<ul>
				`<?php blern_users_also_liked('li'); ?>`
				</ul>
			</li>

The function blern_users_also_liked takes two parameters. The first is either 'li', 'p' or 'br'. This in indicates
how the list should be delimited (either enclosed in 'li' or 'p' tags, or follwed with a 'br' tag). The default is
'br'.

The second parameter is a number indicating how many articles that should be returned (default is 5).

Note that these functions makes use of the file_get_contents function to get data from the blern.com website. If
this function is unavailable or you are prevented from making outgoing HTTP connections this will not work.

== Frequently Asked Questions ==

= What is Blern.com? =

Blern.com learns about you through a variety of your user profiles on the web such as MySpace, Digg, Pandora,
Delicious, WordPress, Stumbleupon and others. Blern then makes accurate recommendations of news and blog articles
based on what it learns about you. You can also train Blern by telling it directly which articles you liked and
which you didn't.

= What's the third line to the Dukes of Hazzard theme song? =

Beats all you never saw
