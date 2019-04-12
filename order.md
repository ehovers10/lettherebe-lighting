---
title: Order your lamp
layout: blank
permalink: /order/
mobile: 1
---

<form id="construct-form" action="/order/order-complete.php" method="POST">
<div data-role="page" id="phil-con">
  {% include form-header.html subtitle="Order a lamp" %}
  <div class="ui-content" role="main">
    {% include order-options.html %}
  </div>
  {% include form-footer.html %}
</div>

<div data-role="page" id="philosophers">
  {% include form-header.html subtitle="Select the lamp(s) you would like to order" %}
  <div class="ui-content" role="main">
    {% include order-philseries.html %}
    <a href="#contact" class="ui-btn ui-btn-a">Next</a>
  </div>
  {% include form-footer.html %}
</div>


{% for sect in site.data.construct %}
<div data-role="page" id="{{ sect.id | append: '-page' }}">
  {% include form-header.html subtitle="Construct your own lamp" %}
  <div class="ui-content" role="main">
    <div id="navbar" data-role="navbar">
      <ul>
      {% for item in site.data.construct %}
	      <li><a href="#{{ item.id | append: '-page' }}"{% if item.id == sect.id %} class="ui-btn-active"{% endif %}>{{ item.id | capitalize }}</a></li>
      {% endfor %}
      </ul>
    </div>
    {% assign nextNum = forloop.index0 | plus: 1 %}
    {% assign prevNum = forloop.index0 | minus: 1 %}
    {% assign nextPage = site.data.construct[nextNum].id | append: '-page' %}
    {% assign prevPage = site.data.construct[prevNum].id | append: '-page' %}
    <div id="{{ sect.id | append: '-tab' }}" class="ui-body-d ui-content">
      {% include form-section.html %}
      <fieldset class="ui-grid-a">
        <div class="ui-block-a">
        {% unless forloop.first %}
          <a href="#{{ prevPage }}" class="ui-btn ui-btn-a">Previous</a>
        {% endunless %}
        </div>
        <div class="ui-block-b">
        {% unless forloop.last %}
          <a href="#{{ nextPage }}" class="ui-btn ui-btn-b">Next</a>
        {% else %}
          <a href="#contact" class="ui-btn ui-btn-b">Next</a>
        {% endunless %}
        </div>
      </fieldset>
    </div>
  </div>
  {% include form-footer.html %}
</div>
{% endfor %}

<div data-role="page" id="contact">
  {% include form-header.html subtitle="Tell me how I can reach you" %}
  <div class="ui-content" role="main"> 
    <label for="name">Name</label>
    <input type="text" id="name" name="name" />
    <label for="name">Email</label>
    <input type="text" id="email" name="email" /> 
    <label for="name">Phone</label>
    <input type="text" id="phone" name="phone" />
    <label for="notes">Any additional notes about your lamp request</label>
    <textarea type="textarea" id="notes" name="notes"></textarea>
    <fieldset class="ui-grid-a">
    <div class="ui-block-a">
      <a class="ui-btn ui-btn-b" href="#" data-rel="back">Back</a>
    </div>
    <div class="ui-block-b">
      <input type="submit" id="submit" name="submit" value="Submit" />
    </div>
    </fieldset>
  </div>
  {% include form-footer.html %}
</div>
</form>
