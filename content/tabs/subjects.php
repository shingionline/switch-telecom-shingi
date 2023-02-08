<p>I would create a new table called <b>subjects</b> as follows:</p>
<pre><code>
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
);
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
  <li>Only subject id and name is needed.</li>
</ul>
</p>