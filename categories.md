---
layout:   default
title:    Categories
permalink: /categories/
---
{% comment%}
Here we generate all the categories.
{% endcomment%}

{% assign rawcats = "" | split: '' %}
{% for idea in site.ideas %}
{% assign tcats = idea.category | join:'|' | append:'|' %}
{% assign rawcats = rawcats | append:tcats %}
{% endfor %}

<h1>{{ rawcats | jsonify }} - {{ site.rohan }}</h1>

{% assign rawcats = rawcats | split:'|' | sort %}

{% assign cats = "" %}

{% for cat in rawcats %}
{% if cat != "" %}

{% if cats == "" %}
{% assign cats = cat | split:'|' %}
{% endif %}

{% unless cats contains cat %}
{% assign cats = cats | join:'|' | append:'|' | append:cat | split:'|' %}
{% endunless %}
{% endif %}
{% endfor %}

<h1 class="page-title">
   {{ page.title }}
</h1>
<br/>

<div class="ideas">
<p>
{% for ct in cats %}
<a href="#{{ ct | slugify }}" class="codinfox-category-mark" style="color:#999;text-decoration: none;"> {{ ct }} </a> &nbsp;&nbsp;
{% endfor %}
<a href="#no-category" class="codinfox-category-mark" style="color:#999;text-decoration: none;"> No Category </a> &nbsp;&nbsp;
</p>

{% for ct in cats %}
<h2 id="{{ ct | slugify }}">{{ ct }}</h2>
<ul class="codinfox-category-list">
  {% for idea in site.ideas %}
  {% if idea.category contains ct %}
  <li>
    <h3>
      <a href="{{baseurl}}{{ idea.url }}">
        {{ idea.title }}
        <small>{{ idea.date | date_to_string }}</small>
      </a>
      {% for tag in idea.tags %}
      <a class="codinfox-tag-mark" href="/blog/tag/#{{ tag | slugify }}">{{ tag }}</a>
      {% endfor %}
    </h3>
  </li>
  {% endif %}
  {% endfor %}
</ul>
{% endfor %}

<h2 id="no-category">No Category</h2>
<ul class="codinfox-category-list">
  {% for idea in site.ideas %}
  {% unless idea.category %}
  <li>
    <h3>
      <a href="{{baseurl}}{{ idea.url }}">
        {{ idea.title }}
        <small>{{ idea.date | date_to_string }}</small>
      </a>
      {% for tag in idea.tags %}
      <a class="codinfox-tag-mark" href="/blog/tag/#{{ tag | slugify }}">{{ tag }}</a>
      {% endfor %}
    </h3>
  </li>
  {% endunless %}
  {% endfor %}
</ul>

</div>
