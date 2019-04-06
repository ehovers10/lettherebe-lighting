---
title: Construct your own lamp
layout: default
permalink: /construct/
---

<form id="construct-form" action="/php/construct.php" method="POST">
{% for sect in site.data.construct %}
{% assign nextNum = forloop.index0 | plus: 1 %}
{% assign prevNum = forloop.index0 | minus: 1 %}
{% assign nextPage = site.data.construct[nextNum].id | append: '-page' %}
{% assign prevPage = site.data.construct[prevNum].id | append: '-page' %}
<div data-role="page" id="{{ sect.id | append: '-page' }}">
  <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
  <h2>Let There be Lighting</h2>
  <div>
    <ul style="width:100%;text-align:center;">
    {% for item in site.data.construct %}
		<li style="display:inline-block;"><a href="#{{ item.id | append: '-page' }}" class="ui-btn{% if sect.id == item.id %} ui-btn-active{% endif %}">{{ item.id }}</a></li>
    {% endfor %}
    </ul>
  </div>
	</div>
<div class="ui-content" role="main">
{% include form-section.html %}
<fieldset class="ui-grid-a">
  <div class="ui-block-a">
{% unless forloop.first %}
    <a href="#{{ prevPage }}" data-theme="a" class="ui-btn">Previous</a>
{% endunless %}
  </div>
  <div class="ui-block-b">
{% unless forloop.last %}
    <a href="#{{ nextPage }}" data-theme="b" class="ui-btn">Next</a>
{% else %}
    <input type="submit" id="submit" name="submit" value="Submit" />
{% endunless %}
  </div>
</fieldset>
</div>
</div>
{% endfor %}
</form>
