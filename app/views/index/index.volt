<div id="header">
    {% include "header.volt" %}
</div>
<hr/>

<h1>Congratulations!</h1>

<p>You're now flying with Phalcon. Great things are about to happen!</p>
{{welcomeWords}}
<br/>
{# e or escape filter #}
<br/>
{{ "<h1>Hello<h1>"|e }}
<br/>
{{ "<h1>Hello<h1>"|escape }}
<br/>

{# trim filter #}
<br/>
 "   hello   "|trim  = {{ "   hello   "|trim }}
<br/>
{# striptags filter #}
<br/>
{{ "<h1>Hello<h1>"|striptags }}
<br/>
{# slashes filter #}
<br/>
"'this is a string'"|slashes = {{ "'this is a string'"|slashes }}
<br/>
{# capitalize filter #}
<br/>
"hello"|capitalize = {{ "hello"|capitalize }}
<br/>
{# lower filter #}
<br/>
"HELLO"|lower= {{ "HELLO"|lower }}
<br/>
{# upper filter #}
<br/>
"hello"|upper={{ "hello"|upper }}
<br/>
{# length filter #}
<br/>
"robots"|length={{ "robots"|length }}
<br/>
[1, 2, 3]|length={{ [1, 2, 3]|length }}
<br/>
nl2br filter= {# nl2br filter #}
<br/>
"some\ntext"|nl2br={{ "some\ntext"|nl2br }}
<br/>
(1+1)*3 = {{ (1+1)*3}}
<br/>
<br/>
{% set fruit = {'Apple', 'Banana', 'Orange'} %}
fruit are:<br/>
{% for f in fruit %}
  <li>{{ f|e}}</li>
{% endfor %}
<br/>
<hr/>


<div class="alert alert-error"></div>
<div class="alert alert-success"></div>
<div class="alert alert-info"></div>


remember me's value in cookie is :{{ value}}(with crypt)
 <br/>
user-name in session is :{{name}}
 <br/>

  <br/>
      <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>" value="<?php echo $this->security->getToken() ?>"/>
  <br/>


<div id="footer">
    {% include "footer.volt" %}
</div>