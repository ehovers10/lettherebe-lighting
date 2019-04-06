---
layout: tables
title: Lamp data
date: 2016-01-18
---

<div class="header">
  <h1>Lamp data</h1>
  <h3>all lamps by Erik Hoversten</h3>
</div>

<div class="wrap" markdown="1">

{% for lamp in site.data.lamps %}

## {{ lamp.name }}

<div class="full odd">
<table class="sortable">
  <tr>
    <th></th>
    <th>Piece</th>
    <th>Quantity</th>
    <th>Cost</th>
  </tr>
{% assign costtotal = 0 %}
{% assign number = 1 %}
{% for item in lamp.parts %}
  <tr>
    <td>{{ number }}.</td>
    <td>{{ item.piece }}</td>
    <td>{{ item.quantity }}</td>
    <td>{{ item.cost }}</td>
  </tr>
{% assign number = number | plus: 1 %}
{% assign itemcost = item.cost | times: item.quantity %}
{% assign costtotal = costtotal | plus: itemcost %}
{% endfor %}
  <tr>
    <td></td>
    <td></td> 
    <td style="border-top: 1px solid #000;font-weight:600;">{{ costtotal }}</td>
  </tr>
</table>
</div>

![Let the be light](../images/lamp-model002a.jpg)
{: .full .even}

{% endfor %}

</div>

<div style="clear:both;"></div>

<div class="header">
  <h3>ehovers10@gmail.com</h3>
</div>
