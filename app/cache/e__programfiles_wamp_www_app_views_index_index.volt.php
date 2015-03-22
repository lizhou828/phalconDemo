<div id="header">
    this is a common header
</div>
<hr/>

<h1>Congratulations!</h1>

<p>You're now flying with Phalcon. Great things are about to happen!</p>
<?php echo $welcomeWords; ?>
<br/>

<br/>
<?php echo $this->escaper->escapeHtml('<h1>Hello<h1>'); ?>
<br/>
<?php echo $this->escaper->escapeHtml('<h1>Hello<h1>'); ?>
<br/>


<br/>
 "   hello   "|trim  = <?php echo trim('   hello   '); ?>
<br/>

<br/>
<?php echo strip_tags('<h1>Hello<h1>'); ?>
<br/>

<br/>
"'this is a string'"|slashes = <?php echo addslashes('\'this is a string\''); ?>
<br/>

<br/>
"hello"|capitalize = <?php echo ucwords('hello'); ?>
<br/>

<br/>
"HELLO"|lower= <?php echo Phalcon\Text::lower('HELLO'); ?>
<br/>

<br/>
"hello"|upper=<?php echo Phalcon\Text::upper('hello'); ?>
<br/>

<br/>
"robots"|length=<?php echo $this->length('robots'); ?>
<br/>
[1, 2, 3]|length=<?php echo $this->length(array(1, 2, 3)); ?>
<br/>
nl2br filter= 
<br/>
"some\ntext"|nl2br=<?php echo nl2br('some\ntext'); ?>
<br/>
(1+1)*3 = <?php echo (1 + 1) * 3; ?>
<br/>
<br/>
<?php $fruit = array('Apple', 'Banana', 'Orange'); ?>
fruit are:<br/>
<?php foreach ($fruit as $f) { ?>
  <li><?php echo $this->escaper->escapeHtml($f); ?></li>
<?php } ?>
<br/>
<hr/>


<div class="alert alert-error"></div>
<div class="alert alert-success"></div>
<div class="alert alert-info"></div>


remember me's value in cookie is :<?php echo $value; ?>(with crypt)
 <br/>
user-name in session is :<?php echo $name; ?>
 <br/>

  <br/>
      <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>" value="<?php echo $this->security->getToken() ?>"/>
  <br/>


<div id="footer">
    this is a common footer
</div>