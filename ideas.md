---
layout: page
title: Ideas Listing
permalink: /ideas/
desc: Browse the entire idea archive
---
<ul class="idea-list">
{% for idea in site.ideas %}
    <li><a class="idea-link" href="{{ idea.url | prepend: site.baseurl }}">{{ idea.title | escape }}</a> <span class="pull-right">{{ idea.date | date: "%b %-d, %Y" }}</span></li>
{% endfor %}
</ul>