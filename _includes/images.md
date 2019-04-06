{% if page.images.size == 1 %}
  ![{{ page.images[0] | remove: '.jpg' | remove: '.gif' }}]({{ page.images[0] | prepend: "/images/" | prepend: site.url }}){: class="pic" }
{% else %}
  <div class="bunch pic">
  {% for pic in page.images %}
    <div class="area {{ pic | remove: '.jpg' | remove: '.gif' }}{% unless forloop.first %} hid{% endunless %}">
      <img src="{{ pic | prepend: "/images/" | prepend: site.url }}" alt="{{ pic | remove: '.jpg' | remove: '.gif' }}">
    </div>
  {% endfor %}
    <ul class="pagenav" style="border-bottom: none;">
      {% for pic in page.images %}
      <li class="internal{% if forloop.first %} active{% endif %}"><a href="#" class="{{ pic | remove: '.jpg' | remove: '.gif' }}">{{ "#" | append: forloop.index }}</a></li>
      {% endfor %}
    </ul>
  </div>
{% endif %}
