---
layout:   default
title:    Categories
permalink: /categories/
---
{% comment%}
Here we generate all the categories.
{% endcomment%}

{% for idea in site.config[ideacategories] %}
<p>{{ idea }}</p>
{% endfor %}
