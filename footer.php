</div>
<div class="paragraph desktop-only">
	<h2><?php yourls_e( 'The bookmarklets', 'isq_translation') ?></h2>
	<p><?php yourls_e( 'To use the bookmarklets drag them to your bookmark bar or simply right click on them and select the appropriate option.', 'isq_translation') ?></p>

	<a href="javascript:(function()%7Bvar%20d=document,w=window,enc=encodeURIComponent,e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),s2=((s.toString()=='')?s:enc(s)),f='<?php echo $page; ?>',l=d.location,p='?url='+enc(l.href)+'&title='+enc(d.title)+'&text='+s2,u=f+p;try%7Bthrow('ozhismygod');%7Dcatch(z)%7Ba=function()%7Bif(!w.open(u))l.href=u;%7D;if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();%7Dvoid(0);%7D)()" title="<?php yourls_e( 'Shortens the URL of the current site and opens a new tab with the details of the shortened URL.', 'isq_translation') ?>" class="bookmarklet"><?php yourls_e( 'Simple Shorten', 'isq_translation') ?></a>
	<a href="javascript:(function()%7Bvar%20d=document,s=d.createElement('script');window.yourls_callback=function(r)%7Bif(r.short_url)%7Bprompt(r.message,r.short_url);%7Delse%7Balert('An%20error%20occured:%20'+r.message);%7D%7D;s.src='<?php echo $page; ?>?url='+encodeURIComponent(d.location.href)+'&jsonp=yourls';void(d.body.appendChild(s));%7D)();" title="<?php yourls_e( 'Opens a pop up with the short URL for the current page.', 'isq_translation') ?>" class="bookmarklet"><?php yourls_e( 'Instant Shorten', 'isq_translation') ?></a>
	<a href="javascript:(function()%7Bvar%20d=document,w=window,enc=encodeURIComponent,e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),s2=((s.toString()=='')?s:enc(s)),f='<?php echo $page; ?>',l=d.location,k=prompt(%22Custom%20URL%22),k2=(k?'&keyword='+k:%22%22),p='?url='+enc(l.href)+'&title='+enc(d.title)+'&text='+s2+k2,u=f+p;if(k!=null)%7Btry%7Bthrow('ozhismygod');%7Dcatch(z)%7Ba=function()%7Bif(!w.open(u))l.href=u;%7D;if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();%7Dvoid(0)%7D%7D)()" title="<?php yourls_e( 'Opens a popup which asks for the keyword for the current URL and opens a new tab with the details of the shortened URL.', 'isq_translation') ?>" class="bookmarklet" ><?php yourls_e( 'Custom Shorten', 'isq_translation') ?></a>
	<a href="javascript:(function()%7Bvar%20d=document,k=prompt('Custom%20URL'),s=d.createElement('script');if(k!=null){window.yourls_callback=function(r)%7Bif(r.short_url)%7Bprompt(r.message,r.short_url);%7Delse%7Balert('An%20error%20occured:%20'+r.message);%7D%7D;s.src='<?php echo $page; ?>?url='+encodeURIComponent(d.location.href)+'&keyword='+k+'&jsonp=yourls';void(d.body.appendChild(s));%7D%7D)();" title="<?php yourls_e( 'This prompts you for the keyword for the current page and then opens a pop up with the short URL of the current page.', 'isq_translation') ?>" class="bookmarklet"><?php yourls_e( 'Instant Custom Shorten', 'isq_translation') ?></a>
</div>

<div class="footer">
	<p><?php yourls_e( 'Powered by <a href="http://yourls.org/">YOURLS</a>. Design by <a href="http://tomslominski.net/">Tom Slominski</a>. Also used: <a href="http://formalize.me/">Formalize</a> and <a href="http://qtip2.com/">qTip²</a>. Find this theme on <a href="https://github.com/tomslominski/infinity-squared">GitHub</a>.', 'isq_translation') ?></p>
</div>
</div>
</body>
</html>
