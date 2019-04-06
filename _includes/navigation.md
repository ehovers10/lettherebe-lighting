<ul style="margin-top:0.5em;">
{% for model in site.models %}
  <li style="padding:0;line-height:1.2;list-style-type:none;"><a href="{{ model.url | prepend: site.baseurl | remove: 'index.html' }}">{{ model.title | capitalize }}</a></li>
{% endfor %}
</ul>
