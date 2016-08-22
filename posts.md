---
layout: page
title: Posts
permalink: /posts/
desc: Browse the entire post archive
---
<ul class="post-list">
{% for post in site.posts %}
    <li><a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title | escape }}</a> <span class="pull-right">{{ post.date | date: "%b %-d, %Y" }}</span></li>
{% endfor %}
</ul>