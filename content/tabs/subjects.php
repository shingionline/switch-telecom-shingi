<p>I would create a new table called <b>subjects</b> as follows:</p>
<pre><code>
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</code></pre>

<h4 class="mt-4">Explanation</h4>

<p>
<ul>
  <li>Only subject id and name is needed.</li>
</ul>
</p>