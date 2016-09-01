---
layout:   default
title:    Categories
permalink: /categories/
---
{% comment%}
Here we generate all the categories.
{% endcomment%}
<h2>Category Listing
{% for category in site.ideacategories %}
  <h3>{{category[0] }}</h3>
  <ul>
  {% for idea in category[1] %}
    <li>
      <h4><a href="{{baseurl}}{{ idea.url }}">
        {{ idea.title }}
        <small>{{ idea.date | date_to_string }}</small>
      </a></h4>
    </li>
  {% endfor %}
  </ul>
{% endfor %}
