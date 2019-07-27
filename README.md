<p><span style="font-size: 13pt;"><strong><span style="font-family: 'courier new', courier;">giddyjq/php-login</span></strong></span></p>
<p>A simple login script used to protect websites with credentials defined on a remote MySQL server.</p>
<p>&nbsp;</p>
<p><span style="font-size: 13pt;"><strong>Configuration</strong></span></p>
<p>You have 1 file you need to configure called <strong>connection.php</strong>. Use this to fill in your database info.</p>
<p>You also have a file called <strong>db_config.sql&nbsp;</strong>which you'll need to execute on your MySQL server. This generates the correct table so that your user information can be read by the script.</p>
<p><strong>The default login is as follows:</strong></p>
<ul style="list-style-type: circle;">
<li>Username:&nbsp;<strong>devmate</strong></li>
<li>Password:&nbsp;<strong>password1</strong></li>
</ul>
<p>This can easily be changed either&nbsp;<strong>directly within the SQL code before executing,&nbsp;</strong>or within the database itself.&nbsp;<strong>Additional credentials can also be added.</strong></p>
<p>Once you have fine-tuned everything, navigate to your domain and try logging in. It's set to redirect to the default&nbsp;<strong>index.php&nbsp;</strong>page with a welcome message. If you can see this, you've done it right.</p>
<p><strong>The authorisation code MUST be present above EVERY header on each page. This is what verifies if a legitimate session has commenced.</strong></p>
<p>&nbsp;</p>
<p><span style="font-size: 13pt;"><strong>Notes</strong></span></p>
<p><span style="font-size: 11pt;">This is my first project on GitHub. It's not perfect, and I've interpreted code from other sources to make everything just about work right. There's plenty of room for improvement security and design wise and I aim to work on this.</span></p>
